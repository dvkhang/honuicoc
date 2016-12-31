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

//Route::get('/', function () {
//    return view('pages.template');
//});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('category/{id}', 'HomeController@category');

Route::get('post/{id}', 'HomeController@post');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);

    Route::group(['prefix' => 'category'], function () {
        Route::get('/add', 'CategoryController@getAdd');
        Route::post('/add', 'CategoryController@postAdd');

        Route::get('/list', 'CategoryController@getList');

        Route::get('/edit/{id}', 'CategoryController@getEdit');
        Route::post('/edit/{id}', 'CategoryController@postEdit');
        //
        Route::get('/editstt', 'CategoryController@getEditStt');

        Route::get('/delete', 'CategoryController@getDelete');


    });

    Route::group(['prefix' => 'post'], function () {
        Route::get('/add', 'PostController@getAdd');
        Route::post('/add', 'PostController@postAdd');

        Route::get('/list', 'PostController@getList');
        Route::get('/detail/{id}', 'PostController@getDetail');

        Route::get('/edit/{id}', 'PostController@getEdit');
        Route::post('/edit/{id}', 'PostController@postEdit');

        Route::get('/delete', 'PostController@delete');

        Route::get('/delete-image/{id}', 'PostController@deleteImage');

        Route::get('/edit-status/{id}', 'PostController@editStatus');
    });

    Route::group(['prefix' => 'order'], function () {

        Route::get('/list', 'OrderController@getList');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/list', 'UserController@getList');

        Route::get('/profile',['uses'=> 'UserController@getProfile']);

        Route::post('/upload-avatar', 'UserController@uploadAvatar');
    });

});