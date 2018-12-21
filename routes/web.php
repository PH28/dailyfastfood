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

// Route::group([
// 		'middleware' => 'is.user',
// 		'prefix' => 'users',
// 		'namespace' => 'User'
// 	], function(){
// 		Route::get('/logout', 'LoginController@logout')->name('users.logout');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('register', [ 'as' => 'register', 'uses' => 'Auth\RegisterController@getRegister']);
Route::post('register', [ 'as' => 'register', 'uses' => 'Auth\RegisterController@postRegister']);

Route::get('/admin/login','Admin\LoginController@showLoginForm')->name('adminlogin');
Route::post('/admin/login','Admin\LoginController@checkLogin')->name('adminlogin');

//thiếu middleware dể phân quyền cho admin
Route::group(['prefix' => 'admin'], function() {

    Route::get('/home/{user}', 'Admin\LoginController@home')->name('admin.home');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/{user}','UserController@index')->name('users.index');
    });
});

