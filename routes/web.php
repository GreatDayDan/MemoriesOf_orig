<?php

use App\Http\Controllers\FamilyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventmoController;
use Illuminate\Support\Facades\Log;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registerweb routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::post('/login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

//Route::resource('eventmo', EventmoController::class);
Route::get('/', function () {
    log::debug('gdd 01.1, get(/');
    return view('welcome');
});

Route::get('/home', function () {
    log::debug('gdd 01.1, get( / home');
    return view('welcome');
});
route::get('/frontpage', function() {
    log::debug('gdd 01.2 get(/frontpage');
    return view ('frontpage');
});

Route::get('/selectevent', 'App\Http\Controllers\EventmoController@index');// works
Route::resource('/store', App\Http\Controllers\EventmoController::class); // works
Route::get('/selectfamily', 'App\Http\Controllers\FamilyController@index');// works
Route::resource('/storefamily', FamilyController::class); // works
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// check for logged in user
Route::middleware(['auth'])->group(function () {
    // show new post form
    {log::debug('gdd 061.1 middleware([auth])->group');}
    Route::get('new-post', 'App\Http\Controllers\PostController@create');
    // save new post
    Route::post('new-post', 'App\Http\Controllers\PostController@store');
    // edit post form
    Route::get('edit/{slug}', 'App\Http\Controllers\PostController@edit');
    // update post
    Route::post('update', 'App\Http\Controllers\PostController@update');
    // delete post
    Route::get('delete/{id}', 'App\Http\Controllers\PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts', 'App\Http\Controllers\UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts', 'App\Http\Controllers\UserController@user_posts_draft');
    // add comment
    Route::post('comment/add', 'App\Http\Controllers\CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}', 'App\Http\Controllers\CommentController@distroy');
});

//users profile
Route::get('user/{id}', 'App\Http\Controllers\UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts', 'App\Http\Controllers\UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}', ['as' => 'post', 'uses' => 'App\Http\Controllers\PostController@show'])->where('slug', '[A-Za-z0-9-_]+');



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();

//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

//Route::group(['middleware' => 'auth'], function () {
//    log::debug('021.1 auth ');
//	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
//	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
//	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
//	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
//	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
//});

