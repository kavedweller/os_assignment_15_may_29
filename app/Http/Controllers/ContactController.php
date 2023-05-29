<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // get data from form
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Send email
        Mail::raw("Name: $name\nEmail: $email\nMessage: $message", function ($message) {
            $message->to('a_kabir@linuxmail.org')
                ->subject('Contact Form Laravel Assignment');
        });

        return redirect()->back()->with('success', 'Done');
    }
}
