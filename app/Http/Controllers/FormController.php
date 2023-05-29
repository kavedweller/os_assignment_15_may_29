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

        return response()->json([
            'success' => true,
            'message' => 'Successfully received',
            'data' => [
                'name' => $name,
                'email' => $email
            ]
        ]);
    }
}
