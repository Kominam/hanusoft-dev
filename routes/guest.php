<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
   return view('guest.index');
})->name('index');
Route::get('test', function() {
    return view('guest.member.index');
});
Route::group(['namespace' => 'Guest'] ,function () {
	Route::resource('projects', 'ProjectController');
	Route::resource('members', 'MemberController');
	Route::resource('posts', 'PostController');
	Route::resource('comments', 'CommentController');
	Route::resource('categories', 'CategoryController');
	Route::get('grades', 'MemberController@getAllGrade');
	Route::get('posts/recents', 'PostController@recents');
	Route::post('contact/send','ContactController@sendContact');
});
