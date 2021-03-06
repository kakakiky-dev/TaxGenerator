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

// route blog
Route::get('/aboutus', 'BlogController@aboutus');
Route::get('/disclaimer', 'BlogController@disclaimer');
Route::get('/privacy', 'BlogController@privacy');
Route::get('/signup', 'BlogController@signup');
Route::get('/signin', 'BlogController@signin');
Route::get('/pph', 'BlogController@pph');
Route::get('/pbb', 'BlogController@pbb');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
