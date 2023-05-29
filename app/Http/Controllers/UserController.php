<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function formSubmit(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input("password");

    // more authentication code


    }

    // Settings
    public function settings()
{
    return view('authentic.settings');
}

// Profile
    public function profile()
    {
        return view('authentic.profile');
    }
}
