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
   return view('layouts.guest.desktop');
})->name('index');

Route::get('fire', function () {
    // this fires the event
    event(new App\Events\TestEvent(10));
    return "event fired";
});
Route::get('redis', function () {
    // this checks for the event
    return view('redis');
});

