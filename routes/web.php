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
Route::group(['middleware' => 'localization', 'namespace' => 'Guest'], function () {
    Route::name('index')->get('/', function () {
        return view('guest.index');
    });
    Route::name('about')->get('about', function () {
        return view('guest.about');
    });
    Route::name('services')->get('services', function () {
        return view('guest.services');
    });
    Route::name('members')->get('members', function(){
    	return view('guest.members.index');
    });
    Route::name('members.show')->get('/members/{slug}', 'UsersController@show');
    Route::post('/lang', 'LanguageController@handle')->name('changeLang');

});
Route::get('fire-event', function () {
    event(new App\Events\TestEvent());
});

Auth::routes();

Route::get('/home', 'HomeController@index');
