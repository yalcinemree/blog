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



Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::get('article/{id}', ['as' => 'article', 'uses' => 'HomeController@article'])->where(['id' => '[0-9]+']);

Route::post('ajax/comment', ['as' => 'comment', 'uses' => 'HomeController@comment']);


Route::get('signup', ['as' => 'signup', 'uses' => 'HomeController@signup']);
Route::post('signup', ['as' => 'userCreate', 'uses' => 'HomeController@userCreate']);

Route::get('login', ['as' => 'login', 'uses' => 'HomeController@login']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'HomeController@postLogin']);



Route::group(array('before' => 'auth'), function()
{
    Route::get('addarticle', ['as' => 'addArticle', 'uses' => 'HomeController@addArticle']);
    Route::post('addarticle', ['as' => 'postArticle', 'uses' => 'HomeController@postArticle']);

    Route::get('logout', ['as' => 'getLogout', 'uses' => 'HomeController@getLogout']);

});