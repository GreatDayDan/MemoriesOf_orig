<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    log::debug('gdd 01 Route::get(/,  function () {return view(welcome');
    return view('welcome');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Auth::routes();
Route::get('/home1', function () {
    log::debug('gdd 02 Route::get(/home,  function () {return view(welcome');
    return view('welcome');
});

Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('about');

Route::get('/home3', 'App\Http\Controllers\HomeController@index');
Route::get('/home4', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/event', function () {
    log::debug('gdd 03 Route::get(/event,  function () {return view(event)');
    return view('event');
});


Route::get('/front', function () {
    log::debug('gdd 04 Route::get(/front,  function () {return view(front)');
    return view('front');
});


Route::get('/dashboard', function () {
    log::debug('gdd 05 Route::get(/dashboard,  function () {return view(dasshboard)');
    return view('dashboard');
});

Route::get('/events', function () {
    log::debug('gdd 031 Route:
    :get(/events,  function () {return view(eventsdd)');
    return view('events');
});
//
//Route::resource('/events', 'EventController');


Route::get('/about', function () {
   log::debug('gdd 03.1 Route about');
   return view('about');
});

Route::resource('events2', 'EventController');

Route::resource('home5', 'HomeController');
