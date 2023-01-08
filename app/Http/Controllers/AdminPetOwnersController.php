<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use Illuminate\Http\Request;

class AdminPetOwnersController extends Controller
{
    public function index() {
        $petOwners = PetOwner::all();

        return view('admin.users.index', compact('petOwners'));
    }
}
