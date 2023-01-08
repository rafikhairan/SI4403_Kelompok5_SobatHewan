<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use App\Models\Product;
use App\Models\Vet;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $productCount = Product::all()->count();
        $vetCount = Vet::all()->count();
        $petOwnerCount = PetOwner::all()->count();

        return view('admin.dashboard', compact('productCount', 'vetCount', 'petOwnerCount'));
    }
}
