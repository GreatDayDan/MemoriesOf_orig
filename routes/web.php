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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::resource('events','eventController');
//Route::resource('families','familyController');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/', 'ListController@show');

Route::get('dashboard', function () {
    return redirect('home/dashboard');
});
