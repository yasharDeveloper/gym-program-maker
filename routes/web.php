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

//***page views***

Route::middleware(['auth'])->group(function() {

    Route::view("main","main");
    Route::view("body-info", "body-info")->name('body-info');
    Route::view("write-program", "write-program")->name('write-program');
    Route::view("dashboard", "dashboard");
});

//**********


//***storing program,s exercise***

Route::get("getchest", "ProgramController@getChest")->name("chestInfo");
Route::get("getbiceps", "ProgramController@getBicep")->name("bicepsInfo");
Route::get("gettriceps", "ProgramController@getTricep")->name('tricepsInfo');
Route::get("getarmpit", "ProgramController@getarmpit")->name('armpitInfo');
Route::get("getback", "ProgramController@getBack")->name('backInfo');
Route::get("getshoulder", "ProgramController@getShoulder")->name('shoulderInfo');
Route::get("getleg", "ProgramController@getLeg")->name('legInfo');

//**********

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', function() {
    Auth::logout();
    return redirect(route('login'));

})->name('logout');
