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
//Auth::routes();
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// check for logged in user
Route::middleware(['auth'])->group(function () {
    // show new post form
    Route::get('new-post', 'PostController@create');
    // save new post
    Route::post('new-post', 'PostController@store');
    // edit post form
    Route::get('edit/{slug}', 'PostController@edit');
    // update post
    Route::post('update', 'PostController@update');
    // delete post
    Route::get('delete/{id}', 'PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts', 'UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts', 'UserController@user_posts_draft');
    // add comment
    Route::post('comment/add', 'CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}', 'CommentController@distroy');
});

//users profile
Route::get('user/{id}', 'UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts', 'UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}', ['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');


