<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('scrape','WebScrappingController@index');
 Route::get('/jobs', ['as' => 'jobs', 'uses' => 'WebScrappingController@jobs']);
Route::group(['prefix' => 'themes'], function () {
    Route::get('/', ['as' => 'themes', 'uses' => 'ThemesController@index']);
    Route::get('/{slug}', ['as' => 'themes.show', 'uses' => 'ThemesController@details']);
	Route::get('/search/q={search}',['as' => 'themes.search', 'uses' => 'ThemesController@search']);

});