<?php

//Login

Route::get('/login','Auth\LoginController@index')->name('login');

Route::post('/login','Auth\LoginController@connect')->name('login.connect');

Route::get('/logout','Auth\LoginController@logout')->name('logout');

//Register

Route::get('/register','Auth\RegisterController@index')->name('register');

Route::post('/register','Auth\RegisterController@create')->name('register.create');

//Forget Password

Route::get('/reset','Auth\ResetPasswordController@resetPassword')->name('password.reset.get');
Route::post('/reset','Auth\ResetPasswordController@resetPasswordValidate')->name('password.reset.post');

//Reset Password

Route::get('/password-reset/{token}','Auth\ResetPasswordController@sendResetLinkEmail')->name('password.link.reset.get');
Route::post('/password-reset','Auth\ResetPasswordController@sendResetLinkEmailValidate')->name('password.link.reset.post');