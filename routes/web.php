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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/post/{id}', 'HomeController@post');
Route::get('/contact', 'HomeController@contact');

Auth::routes();
Route::get('/admin/logout', 'Auth\LoginController@logout');

/*Admin Routes*/
Route::get('/admin', 'AdminMainController@get');

Route::get('/admin/dashboard', 'AdminMainController@get');

Route::get('/admin/post', 'PostController@get');

Route::get('/admin/post/edit/{id}', 'PostController@getEdit');
Route::post('/admin/post/edit/{id}', 'PostController@updatePost');

Route::get('/admin/post/delete/{id}', 'PostController@voidPost');

Route::get('/admin/post/new', 'PostController@getNew');
Route::post('/admin/post/new', 'PostController@createPost');

Route::get('/admin/comment', 'CommentController@get');

Route::get('/admin/user', 'UserController@get');

Route::get('/admin/user/new', 'UserController@getNew');
Route::post('/admin/user/new', 'UserController@createUser');
