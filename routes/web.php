<?php

use Illuminate\Support\Facades\Route;
use App\MoEvent;


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

//Auth::routes();

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        'Moevent' => Moevent::latest()->get()
    ]);
});
//Route::get('Home',function() {
//    return view('xxx');
//});
Route::get('/moevent', function(){
    return view('moevent');
});


Route::get('/mofamilies', function(){
    return view('mofamilies');
});

Route::resource('/Moevent','MoeventController');

route::redirect('moevent','home' );

Route::get('/dashboard', function () {
    return redirect('home/dashboard');
});

//<<<<<<< HEAD
//Route::get('app\Http\Controllers\Mo_Event\{id}', [Mo_EventController::class, 'show']);
//Route::get('App\Http\Controllers\User\{id}', [USerController::class, 'user.profile']);
//=======

//Route::get('/user', 'UserController@index');

//>>>>>>> 2d9e729a1dd7f99c08c9e3415119332369be82eb



//<<<<<<< HEAD
//
//Route::get('/mo_Event', 'Mo_EventContoller@index');
//Route::get('/Mo_Event/{Mo_Event}', 'Mo_EventController@show');
//

//Route::resource('moEvent','moEventsController');
////Route::resource('families','familyController');
//
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
//=======
/*20200812 1340 */
//>>>>>>> 2d9e729a1dd7f99c08c9e3415119332369be82eb
