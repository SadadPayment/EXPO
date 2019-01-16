<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v2')->group(function () {
    Route::resource('/news', 'api\NewsController');
    Route::resource('/archive', 'api\ArchiveController');
    Route::resource('/coming_expo', 'api\ComingExpoController');
    Route::resource('/complaint', 'api\ComplaintController');
    Route::resource('/exposition', 'api\ExpositionController');
    Route::resource('/participant', 'api\ParticipantController');
    Route::resource('/Sponsors', 'api\SponsorsController');
    Route::resource('/subscribers', 'api\SubscribersController');
    Route::resource('/Suggestion', 'api\SuggestionController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
