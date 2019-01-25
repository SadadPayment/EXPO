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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('exposition', 'web\ExpositionController');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


//Route::prefix('admin')->group(function () {
Route::resource('News', 'web\NewsController')->middleware('auth');
Route::resource('Sponsors', 'web\SponsorsController')->middleware('auth');
Route::resource('Exposition', 'web\ExpositionController')->middleware('auth');
Route::resource('CatExposition', 'web\CategoryExpositionController')->middleware('auth');
Route::resource('Archive', 'web\ArchiveController')->middleware('auth');
Route::resource('ComingExpo', 'web\ComingExpoController')->middleware('auth');
Route::resource('Subscribers', 'web\SubscribersController')->middleware('auth');
Route::resource('WebSetting', 'SettingController')->middleware('auth');

Route::resource('Complaints', 'Users\ComplaintsController')->middleware('auth');
Route::resource('Suggestions', 'Users\SuggestionsController')->middleware('auth');

//});
//});