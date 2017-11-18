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

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/', ['as' => 'suggest', 'uses' => 'SuggestionController@create']); 
Route::post('/', ['as' => 'suggest.store', 'uses' => 'SuggestionController@store']); 

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('awgrymiadau', ['as' => 'suggestions', 'uses' => 'SuggestionController@index']);
    Route::post('awgrymiadau', ['as' => 'suggestions.process', 'uses' => 'SuggestionController@process']);

    Route::get('/lyrics', ['as' => 'lyrics', 'uses' => 'LyricController@index']);
    Route::get('/lyrics/{lyric}', ['as' => 'lyrics', 'uses' => 'LyricController@show']);
    Route::get('/lyrics/{lyric}/update', ['as' => 'lyrics.update', 'uses' => 'LyricController@edit']);
    Route::put('/lyrics/{lyric}/update', ['as' => 'lyrics.update', 'uses' => 'LyricController@update']);

    Route::get('artists', ['as' => 'artists', 'uses' => 'ArtistController@index']); 
    Route::get('artists/{artist}', ['as' => 'artists.show', 'uses' => 'ArtistController@show']); 
 
    Route::get('submit/artist', ['as' => 'submit.artist', 'uses' => 'SubmitLyricController@createArtist']); 
    Route::post('submit/artist', ['as' => 'submit.artist', 'uses' => 'SubmitLyricController@storeArtist']); 
    Route::get('submit/{artist}/image', ['as' => 'submit.image', 'uses' => 'SubmitLyricController@createArtistImage']); 
    Route::post('submit/{artist}/image', ['as' => 'submit.image', 'uses' => 'SubmitLyricController@storeArtistImage']); 
    Route::get('submit/lyric/{artist?}', ['as' => 'submit.lyric', 'uses' => 'SubmitLyricController@createLyric']); 
    Route::post('submit/lyric', ['as' => 'submit.lyric.post', 'uses' => 'SubmitLyricController@storeLyric']); 
});