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
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\UserController@index');
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'Admin\UserController@getUsers');
        Route::get('add', 'Admin\UserController@getAddUser');
        Route::post('add', 'Admin\UserController@postAddUser');
        Route::get('edit/{id}', 'Admin\UserController@getEditUser');
        Route::post('edit/{id}', 'Admin\UserController@postEditUser')->name('postEdit');
        Route::get('delete/{id}', 'Admin\UserController@deleteUser');
    });

});
