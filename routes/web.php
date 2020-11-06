<?php

use App\Http\Controllers\FamilyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventmoController;
use Illuminate\Support\Facades\Log;

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
Route::resource('eventmo', EventmoController::class);

Route::get('/', function () {
    log::debug('gdd 01.1');
    return view('welcome');
});
route::get('/frontpage', function() {
    log::debug('gdd 01.2');
    return view ('frontpage');
});

Route::get('/selectevent', 'App\Http\Controllers\EventmoController@index');// works
Route::resource('/store', EventmoController::class); // works

Route::get('/selectfamily', 'App\Http\Controllers\FamilyController@index');// works
Route::resource('/storefamily', FamilyController::class); // works
