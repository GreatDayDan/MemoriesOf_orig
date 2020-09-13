<?php

use Illuminate\Support\Facades\Route;
use App\Mo_Event;


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
    return view('home');
});
Route::get('app\Http\Controllers\Mo_Event\{id}', [Mo_EventController::class, 'show']);
Route::get('App\Http\Controllers\User\{id}', [USerController::class, 'user.profile']);


Route::get('/about', function () {
    return view('about', [
        'Mo_Event' => Mo_Event::latest()->get()
    ]);
});


Route::get('/mo_Event', 'Mo_EventContoller@index');
Route::get('/Mo_Event/{Mo_Event}', 'Mo_EventController@show');


//Route::resource('moEvent','moEventsController');
////Route::resource('families','familyController');
//
//Route::get('/home', 'home@index')->name('home')->middleware('auth');
//Route::get('/', 'home@show');
//
//Route::get('dashboard', function () {
//    console.log('web.php: Route::get dashboard');
//
//    return redirect('home/dashboard');
//
//});
//
//
///*20200812 1340 */
//Route::get('Home',function() {
//    return view('moHomePage');
//
//});
