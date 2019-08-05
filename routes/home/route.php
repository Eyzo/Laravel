<?php

//Route Principales

Route::get('/','PagesController@index')->name('home');

Route::get('{id}','PagesController@singleView')->name('single.view');