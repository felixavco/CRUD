<?php

Route::get('/', 'PostsController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('posts', 'PostsController');
