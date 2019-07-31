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

Route::get('/test',function (\App\TestInterface $test){

   dd(Test::parler('bonjour'));

});

Route::get('/test2',function (\App\ServiceContainerTest\TonyInterface $tony) {
   dd($tony->test('je suis un test'));
});

Route::get('my-home', 'AdminController@myHome');

Route::get('my-users','AdminController@myUsers');

Route::group(['prefix' => 'links'],function () {

    Route::get('create','LinkController@create');
    Route::post('create','LinkController@store');
    Route::get('{id}','LinkController@show')->where('id','[0-9]+')->name('link.show.unique');

});

Route::resource('news','PostController');

Route::get('/','PagesController@index')->name('home');

Route::get('{id}','PagesController@singleView')->name('single.view');