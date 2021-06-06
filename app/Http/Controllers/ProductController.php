<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $fruites = array('apple', 'banana', 'mango', 'strawbrary');
        return view('welcome', compact('fruites'));
    }
}
