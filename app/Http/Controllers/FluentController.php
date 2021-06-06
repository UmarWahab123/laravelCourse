<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h1>';

        // string fluent operation//

//this operation use two function display the of() and remove after() from the string.

        $slice = Str::of('Welcome to my laravel cource session2021')->after('Wel');
        echo $slice . '<br>';
// this operation will print after the last \ mean controller only

        $slice2 = Str::of('App\Http\controllers\controller')->afterLast('\\');
        echo $slice2 . '<br>';

//this operation combine the two string

        $maha = Str::of('Hello')->append(' Maha');
        echo $maha . '<br>';

// to convert into lowercase
        $contolower = Str::of('I AM PAKISTANI NATIONALITY HOLDER')->lower();
        echo $contolower . '<br>';
// to replace some string
        $replaced = Str::of('Laravel Latest Version 7.0')->replace('7.0', '8.0');
        echo $replaced . '<br>';
//convert to a title
        $title = Str::of('this is a title')->title();
        echo $title . '<br>';
//to add slug mean to add - instead of spaces
        $slug = Str::of('Laravel 8 Framework are so good')->slug('-');
        echo $slug . '<br>';
// to display the substring of the given str use substring by specify a given index and lenght
        $str = Str::of('umar wahab katkala')->substr(5, 5); //first is index and 2nd is len
        echo $str . '<br>';
// to trim(remove) some character from the str
        $trim = Str::of('pakistan zimbwaoby')->trim('pakistan');
        echo $trim . '<br>';
//convert to uppercase
        $toUpper = Str::of('a quick brown fox jumps over the lazy dog')->upper();
        echo $toUpper . '<br>';

    }
}
