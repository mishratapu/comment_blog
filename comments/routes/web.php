<?php

Auth::routes();
Route::get('/','UserController@login')->name('login');
// Route::get('user/logout','UserController@logout')->name('logout');
 Route::get('user/signup','UserController@signup')->name('signup');
 Route::get('user/register','UserController@register')->name('register');
Route::get('user/loginuser','UserController@loginuser')->name('loginuser');
Route::get('user/dashboard','UserController@dashboard')->name('dashboard');
 Route::get('post/posts','PostController@posts')->name('posts');

Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.store');
Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
Route::get('home/dashboard','HomeController@dashboard')->name('dashboard');
