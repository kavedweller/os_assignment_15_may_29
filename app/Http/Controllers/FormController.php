<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Load the form
    public function index()
    {
        return view('index');
    }

    public function formSubmit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input("password");

        //strlen() returns 0 if the string is empty
        if (strlen($name)>=2 && strlen($password)>=8 && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        }
    }
}
