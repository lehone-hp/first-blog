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
Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/post', function () {
    return view('admin.posts');
});

Route::get('/admin/post/new', function () {
    return view('admin.newpost');
});

Route::get('/admin/comment', function () {
    return view('admin.comment');
});
