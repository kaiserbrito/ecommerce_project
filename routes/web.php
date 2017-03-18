<?php

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product.cart'
]);

Route::get('cart', [
	'uses' => 'ProductController@getCart',
	'as' => 'product.addToCart'
]);

Route::get('/checkout', [
	'uses' => 'ProductController@getCheckout',
	'as' => 'checkout'
]);

Route::post('/checkout', [
	'uses' => 'ProductController@postCheckout',
	'as' => 'checkout'
]);


Route::group(['prefix' => 'user'], function() {
    
	Route::get('/signup', [
	'uses' => 'Auth\RegisterController@getSignUp',
	'as' => 'user.signup'
	]);

	Route::post('/signup', [
		'uses' => 'Auth\RegisterController@postSignUp',
		'as' => 'user.signup'
	]);

	Route::get('/signin', [
		'uses' => 'Auth\LoginController@getSignIn',
		'as' => 'user.signin'
	]);

	Route::post('/signin', [
		'uses' => 'Auth\LoginController@postSignIn',
		'as' => 'user.signin'
	]);

	Route::get('/profile', [
		'uses' => 'UserController@getProfile',
		'as' => 'user.profile'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'user.logout'
	]);
});

