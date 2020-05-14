<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'LoginController@index')->name('login.home');
Route::get('signup', 'SignupController@index')->name('signup.home');
Route::post('create', 'SignupController@create')->name('signup.create');
