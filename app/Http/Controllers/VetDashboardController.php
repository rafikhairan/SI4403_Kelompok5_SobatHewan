<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class VetDashboardController extends Controller
{
    public function index() {
        return view("vet.appointment");
    }

    public function articles() {
        $articles = Article::where('vet_id', auth()->user()->vet->vet_id)->get();

        return view("vet.articles", compact('articles'));
    }

    public function create() {
        return view("vet.create");
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'body' => 'required'
        ]);
        
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        $image = explode('.', $request->file('image')->getClientOriginalName())[0];
        $image = $image . '-' . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('images/articles/', $image);

        $data['slug'] = $slug;
        $data['excerpt'] = Str::limit(strip_tags($request->body), 250);
        $data['image'] = $image;
        $data['vet_id'] = auth()->user()->vet->vet_id;
        Article::create($data);

        return redirect('/vetdashboard/articles')->with('success', 'New article has been added');
    }

    public function destroy(Article $article) {
        Storage::delete('images/vets/' . $article->image);
        Article::destroy($article->id);

        return redirect('/vetdashboard/articles')->with('success', 'Article has been deleted');
    }
}
