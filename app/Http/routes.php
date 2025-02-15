<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller("/technikai", "TechnicalController");

Route::get("/details/{id}", "TextController@getDetails");

Route::get("/text/verse-text/{book}/{chapter}/{verse}", "TextController@getVerseText");
Route::get("/text/concordance/{wordId}/{corpusId}", "TextController@getConcordance");
Route::get("/text/{wordId}", "TextController@getByWordId")->where('wordId', '[0-9]+');
Route::controller("/text/{book?}/{chapter?}/{verse?}", "TextController");

Route::get("/words", 'WordController@getIndex');
Route::get("/words/section/{from}/{to}", "WordController@getSection");
Route::get("/words/search/{gk}", "WordController@getSearch");
Route::post("/words/mj", "WordController@getByMj");

Route::controller("/board", "BoardController");


Route::get('/help.html', function() { return Redirect::to('/help', 301); });
Route::get('/rovjegyz.htm', function() { return Redirect::to('/rovjegyz', 301);});
Route::get('/linkek.html', function() { return Redirect::to('/linkek', 301);});
Route::get('/letolthetok.html', function() { return Redirect::to('/download', 301);});
Route::get('/level.php', function() { return Redirect::to('/board', 301);});

Route::controller('/', 'HomeController');