<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function demo()
    {
        $name = 'umar wahab'; // passing some data from the controller to view

        //passing array from the controller to view
        $users = array(
            "name" => "wahab",
            "email" => "wahab77@gmail.com",
            "phone" => "12343423432",
        );

        return view('user', compact('name', 'users'));
    }
}
