<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        return view('petowner.profile.myprofile');
    }

    public function update(Request $request) {

        $user = Auth::user();
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->birth_date = $request->input('birth_date');
        $user->address = $request->input('address');

        if (! $request->input('new_password')) {
            $user->password = bcrypt($request->input('new_password'));
        }

        $user->save();

        return view('petowner.profile.myprofile');
    }
}