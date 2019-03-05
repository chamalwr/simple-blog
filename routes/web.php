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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'author', 'middleware' => 'auth'], function(){

    Route::get('/post/createpost', [
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/save', [
        'uses' => 'PostController@store',
        'as' => 'post.save'
    ]);


    Route::get('post/articles/my', [
       'uses' => 'PostController@showMine',
       'as' => 'post.showMine'
    ]);

    Route::get('/post/delete/{id}', [
       'uses' => 'PostController@destroy',
       'as' => 'post.delete'
    ]);

});

Route::get('/viewposts', [
    'uses' => 'PostController@showAll',
    'as' => 'post.showAll'
]);
