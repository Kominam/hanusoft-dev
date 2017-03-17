<?php

Route::group(['namespace' => 'Guest'], function(){
	Route::resource('categories', CategoriesController::class);
	Route::resource('posts', PostsController::class);
	Route::resource('comments', CommentsController::class);
	Route::resource('projects', ProjectsController::class);
	Route::resource('users', UsersController::class);
});
