<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// example of required parameter

Route::get('/users/{name}', function ($name) {
    return 'hi ' . $name;
});

// example of optional parameter

Route::get('/users/{name?}', function ($name = null) {
    return 'hi ' . $name;
});

// example to set regular expression for name that only take alpahabatic character.

Route::get('/prduct/{name?}', function ($name = null) {
    return 'hi ' . $name;
}); //->where('name', '[a-zA-Z]+');    //this is a local constraint

// example to set regular expression for name that only take numeric character.

Route::get('/product/{id?}', function ($id = null) {
    return 'the product id is ' . $id;
}); //->where('id', '[0-9]+');    //this is a local constraint

//example to set route for multiple http respond/request
Route::match(['get', 'post'], '/student', function (Request $req) {
    return 'Requested methed is ' . $req->method();
});

//example to set route for any http responde/request
Route::any('/posts', function (Request $req) {
    return 'Requested method is ' . $req->method();
});
