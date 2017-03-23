<?php
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
Route::group(['middleware' => 'localization'], function () {
    Route::get('/test', function () {
        return view('guest.index');
    });
    Route::post('/lang','LanguageController@handle')->name('changeLang');

});
Route::get('/', function () {
    return view('welcome');
});

Route::get('fire-event', function () {
    event(new App\Events\TestEvent());
});

Auth::routes();

Route::get('/home', 'HomeController@index');
