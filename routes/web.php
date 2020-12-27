<?php

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

Route::get("/", "studentcontroller@disp")->name('home');
Route::get("/create", "studentcontroller@create")->name('create');
Route::post("/create", "studentcontroller@store")->name('store');
//Route::get('/about', "App\Http\Controllers\hellocontroller@about");
Route::view("/addnew","addnew");

//Route::get('/contact', "App\Http\Controllers\hellocontroller@contact");