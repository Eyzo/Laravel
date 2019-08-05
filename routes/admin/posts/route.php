<?php

//CRUD de POST

Route::group(['namespace' => 'Admin','prefix' => 'admin'],function () {

    Route::resource('news','PostController');

});