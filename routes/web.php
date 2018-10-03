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

/*Admin Routes*/
Route::get('/admin', 'AdminMainController@get');

Route::get('/admin/dashboard', 'AdminMainController@get');

Route::get('/admin/post', 'PostController@get');

Route::get('/admin/post/new', 'PostController@getNew');

Route::get('/admin/comment', 'CommentController@get');

Route::get('/admin/user', 'UserController@get');

Route::get('/admin/user/new', 'UserController@getNew');
