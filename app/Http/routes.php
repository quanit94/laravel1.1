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

Route::get('/demo/{id}', function($id){
	return 'hello '.$id;
});
// ---------------------------Login - logout---------------------------//
Route::get('/login', array('as' => 'login', 'uses' => 'HomeController@showLogin'));
Route::post('/login', array('as' => 'login', 'uses' => 'HomeController@doLogin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'HomeController@doLogout'));

// ---------------------------Home---------------------------//
Route::get('/home', array('as'=> 'home', 'uses' => 'HomeController@index'));

// ---------------------------User Manager---------------------------//
Route::get('/user', array('as' => 'user', 'uses' => 'UserController@index'));
Route::get('/add-new-user', array('as'=>'add_user_get', 'uses' => 'UserController@add_user_get'));
Route::post('/add-new-user', array('as'=>'add_user_post', 'uses' => 'UserController@add_user_post'));


Route::get('/delete-user/{id}', array('as'=> 'delete_user', 'uses' => 'UserController@delete_user'));

Route::get('/edit-user/{id}', array('as'=> 'edit_user_get', 'uses' => 'UserController@edit_user_get'));
Route::post('/edit-user/{id}', array('as'=>'edit_user_post', 'uses'=> 'UserController@edit_user_post'));