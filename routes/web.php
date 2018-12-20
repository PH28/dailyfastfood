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
Route::get('/admin/login','Admin\LoginController@showLoginForm')->name('adminlogin');
Route::post('/admin/login','Admin\LoginController@checkLogin')->name('adminlogin');

//thiếu middleware để phân quyền cho admin
// group của admin mới vào được
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

    Route::get('/home/{user}', 'Admin\LoginController@home')->name('admin.home');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/{user}','UserController@index')->name('users.index');
    });
});

