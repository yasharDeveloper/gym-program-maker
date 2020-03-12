<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view("main","main")->middleware('auth');

Route::view("body-info", "body-info");

Route::view("write-program", "write-program");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', function() {
    Auth::logout();
    return redirect(route('login'));

})->name('logout');
