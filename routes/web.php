<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HttprequestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\PaymentGatway\Payment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [ProductController::class, 'index'])->name('product.index');

//passing locale for localization
// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('welcome');
// });

//to create routes for index funtion
Route::get('/hom/{name?}', [HomeController::class, 'index'])->name('hom.index');

//to create route for load the view
// Route::get('/user', function () {
//     return view('user');
// });

//to load the view by controller type this one here
Route::get('/user', [UserController::class, 'demo'])->name('user.demo');

//to create a routes for ClientController
Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');
Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');
Route::get('/request', [HttprequestController::class, 'create'])->name('resquest.create');
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');
Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');
Route::get('/add-post', [PostController::class, 'addPost'])->name('add.post');
Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.addsuubmit');
Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('posts.getbyid');
Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::post('/post-update', [PostController::class, 'updatePost'])->name('post.update');
Route::get('/inner-join', [PostController::class, 'innerClause'])->name('post.innerjoin');
Route::get('/leftJoin', [PostController::class, 'leftJoinClause'])->name('post.leftjoin');
Route::get('/rightJoin', [PostController::class, 'RightJoinClause'])->name('post.rigjoin');
Route::get('/getPost', [PostController::class, 'getAllPostUsingModel'])->name('post.get');
Route::get('/get-Post', [PostController::class, 'getAllPostsUsingModel'])->name('users.get');
Route::get('/test', function () {
    return view('test');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/users', [PaginationController::class, 'allUsers']);
Route::get('/upload', [FileUploadController::class, 'uploadForm']);
Route::post('/upload', [FileUploadController::class, 'uploadFile'])->name('upload.uploadfile');

Route::get('/payment', function () { // rout for facade
    return Payment::process();
});
Route::get('/send-email', [MailController::class, 'sendEmail']);
