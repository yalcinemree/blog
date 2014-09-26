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

Route::get('article/{id}', ['as' => 'article', 'uses' => 'ArticleController@article'])->where(['id' => '[0-9]+']);

Route::post('ajax/comment', ['as' => 'comment', 'uses' => 'CommentController@comment']);



Route::group(array('before' => 'isLoggedIn'),function()
{
    Route::get('signup', ['as' => 'signup', 'uses' => 'UserController@signup']);
    Route::post('signup', ['as' => 'userCreate', 'uses' => 'UserController@userCreate']);

    Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
    Route::post('login', ['as' => 'postLogin', 'uses' => 'UserController@postLogin']);
});


Route::group(array('before' => 'auth'), function()
{
    Route::get('addarticle', ['as' => 'addArticle', 'uses' => 'ArticleController@addArticle']);
    Route::post('addarticle', ['as' => 'postArticle', 'uses' => 'ArticleController@postArticle']);

    Route::get('logout', ['as' => 'getLogout', 'uses' => 'UserController@getLogout']);

});