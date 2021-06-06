<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {
        //form validation
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);
        //to retrieve all the input data is in array just pass the argument and type all method

        //return "Form Submitted";  just return str form submitted

        // return $request->all();  get all the input data is in array

        //we can also get the individual request for that
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email :' . $email . '<br>' . 'password :' . $password;

    }
}
