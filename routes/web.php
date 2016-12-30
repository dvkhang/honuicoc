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

    Route::group(['prefix' => 'product'], function () {
        Route::get('/add', 'ProductController@getAdd');
        Route::post('/add', 'ProductController@postAdd');

        Route::get('/list', 'ProductController@getList');
        Route::get('/detail/{id}', 'ProductController@getDetail');

        Route::get('/edit/{id}', 'ProductController@getEdit');
        Route::post('/edit/{id}', 'ProductController@postEdit');

        Route::get('/delete', 'ProductController@delete');

        Route::get('/delete-image/{id}', 'ProductController@deleteImage');

        Route::get('/edit-status/{id}', 'ProductController@editStatus');
    });

    Route::group(['prefix' => 'addon'], function () {
        Route::get('/add', 'AddonController@getAdd');
        Route::post('/add', 'AddonController@postAdd');

        Route::get('/list', 'AddonController@getList');

        Route::get('/edit/{id}', 'AddonController@getEdit');
        Route::post('/edit/{id}', 'AddonController@postEdit');

        Route::get('/delete', 'AddonController@delete');


        Route::get('/edit-status/{id}', 'AddonController@editStatus');
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