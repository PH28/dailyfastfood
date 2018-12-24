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

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('register', [ 'as' => 'register', 'uses' => 'Auth\RegisterController@getRegister']);
Route::post('register', [ 'as' => 'register', 'uses' => 'Auth\RegisterController@postRegister']);

Route::get('/admin/login','Admin\LoginController@showLoginForm')->name('adminlogin');
Route::post('/admin/login','Admin\LoginController@checkLogin')->name('adminlogin');

Route::group([
		'middleware' => ['auth', 'is.admin'],
		'prefix' => 'admin',
		'as' => 'admin.'
	], function(){
		//home
		Route::get('/home', 'Admin\LoginController@home')->name('home');

		//categories
		Route::resource('categories', 'CategoryController');

		//products
		Route::resource('products', 'ProductController');

		//user
		Route::resource('users', 'UserController');

		//order
		Route::resource('orders', 'OrderController');

		//comments
		Route::resource('comments', 'CommentController');

		//images
		Route::resource('images', 'ImageController');

		//discounts
		Route::resource('discounts', 'DiscountController');
});

