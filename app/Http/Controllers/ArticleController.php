<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::latest()->get();

        return view('petowner.articles', compact('articles'));
    }

    public function show(Article $article) {
        return view('petowner.article', compact('article'));
    }
}
