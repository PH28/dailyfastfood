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
	return redirect()->route('users.index');
});

Auth::routes();

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@getRegister']);
Route::post('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@postRegister']);

Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('adminlogin');
Route::post('/admin/login', 'Admin\LoginController@checkLogin')->name('adminlogin');

Route::group([
	'middleware' => ['admin'],
	'prefix' => 'admin',
	'as' => 'admin.'
], function () {
		//home, logout
	Route::get('/home', 'Admin\LoginController@home')->name('home');
	Route::get('/logout', 'Admin\LoginController@logout')->name('logout');

		//categories
	Route::resource('categories', 'CategoryController');
	Route::get('/categories/{id}/subcategory', 'CategoryController@showSubcategory')->name('categories.subcategory');
	Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');

		//products
	Route::resource('products', 'ProductController');
	Route::get('products/{id}/detail', 'ProductController@detailProduct')->name('products.detail');

		//user
	Route::resource('users', 'UserController');


	Route::get('users/{id}/infomation', 'UserController@userInfomation')->name('users.infomation');
	Route::get('users/{id}/orderdetail', 'UserController@userInfomationByOrderDeatil')->name('users.orderdeatil');


		//orderso 
	Route::resource('orders', 'OrderController');
	Route::get('orders/{id}/status', 'OrderController@checkStatus')->name('orders.check');
	Route::get('orders/status/{status}', 'OrderController@orderStatus')->name('orders.status');
	Route::get('orders/search', 'OrderController@searchDate')->name('orders.search');


		//comments
	Route::resource('comments', 'CommentController');

		//images
<<<<<<< HEAD
	Route::resource('images', 'ImageController');
=======
		Route::resource('images', 'ImageController');
		Route::get('/images/{id}/delete', 'ImageController@destroy')->name('images.destroy');
>>>>>>> 57e60f8b8594da7eafc76f5df2036430531bb4ea

		//discounts
	Route::resource('discounts', 'DiscountController');
	Route::get('/discounts/{id}/delete', 'DiscountController@destroy')->name('discounts.destroy');
});

Route::group(['namespace' => 'Users', 'as' => 'users.'], function () {
	Route::get('/index', 'UsersController@getIndex')->name('index');
	Route::get('/category/{id}', 'UsersController@getCategory')->name('category');
	Route::get('/product/{id}', 'UsersController@getProduct')->name('product');
	Route::get('/contact', 'UsersController@getContact')->name('contact');
	Route::get('/about', 'UsersController@getAbout')->name('about');
	Route::get('/add-to-cart/{id}', 'UsersController@getAddtocart')->name('addcart');
	Route::get('/cart', 'UsersController@cart')->name('cart');
	Route::get('/search', 'UsersController@searchProduct')->name('searchProduct');
	Route::resource('orders', 'OrderController');
});

Route::group([
	'middleware' => ['auth', 'is.user']
], function () {
	Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});