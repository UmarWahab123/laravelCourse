<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index($name = null)
    {
        return 'Hi dear programmer ' . $name;
    }
}
