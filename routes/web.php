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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dbconn', function () {
    return view('dbconn');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/ourservices', function () {
    return view('ourservices');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/ourwork', function () {
    return view('ourwork');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/footer', function () {
    return view('footer');
});


Route::get('/front-page', function () {
    return view('front-page');
});
Route::get('/index', function () {
    return view('index');
});

