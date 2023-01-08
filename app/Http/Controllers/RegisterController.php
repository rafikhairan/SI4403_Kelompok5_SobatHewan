<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password'
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);

        return redirect('/login');
    }
}
