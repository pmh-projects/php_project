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
    return view('auth/login');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/find', function () {
    return view('find');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/main_page', function () {
    return view('main_page');
});

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/form', 'App\Http\Controllers\FormController@index');

Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/main_page', 'App\Http\Controllers\main_page@index');
