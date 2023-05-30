<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($name) {
    return 'Hello World, I am ' . $name;
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', PostController::class);
Route::resource('/categories',CategoryController::class);

//store route for post
Route::post('/posts', [PostController::class, 'store'])->name('post.store');