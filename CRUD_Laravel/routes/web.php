<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/post-list', 'PostController@addPost')->name('post.add');

Route::get('/add-post', 'PostController@addPost')->name('post.add');

Route::post('/add-post', 'PostController@savePost')->name('save.post');

Route::get('/post-list', 'PostController@postList')->name('post.list');

Route::get('/edit-post/{id}', 'PostController@editPost')->name('post.edit');

Route::get('/delete-post/{id}', 'PostController@deletePost')->name('delete.post');

Route::post('/update-post', 'PostController@updatePost')->name('update.post');


