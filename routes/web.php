<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'LoginController@index')->name('login.home');
Route::post('search', 'LoginController@search')->name('login.search');
Route::get('signup', 'SignupController@index')->name('signup.home');
Route::post('create', 'SignupController@create')->name('signup.create');
Route::get('todo', 'TodoController@index')->name('todo.home');
Route::post('todo', 'TodoController@create')->name('todo.create');
Route::delete('todo/delete/{id}', 'TodoController@delete')->name('todo.delete');
