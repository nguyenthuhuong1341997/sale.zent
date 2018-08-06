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
// Route::get('/aa', function () {
//     return view('logintest');
// });
// Route::get('login/google', 'Auth\LoginController@redirectToProvider');
// Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/', function () {
//     Cart::add('293ad', 'Product 1', 1, 9.99);
//     dd(Cart::content());
// });
Route::get('image-view','ImageController@index');
Route::post('image-view','ImageController@store');
// Route::get('detail/getlist/{id}', 'ProductDetail@getList');

Auth::routes(); 
Route::get('home', 'HomeController@index')->name('home');
Route::get('ladies','HomeController@ladies');
Route::get('men','HomeController@men');
Route::get('checkout','HomeController@checkout');
Route::post('checkout','HomeController@addcheckout');
Route::get('quickview/{id}','HomeController@quickview');
Route::post('quickview/{id}','HomeController@addCart');


Route::prefix('admin')->group(function(){	
	Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Admin\LoginController@login');
	Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
	// Registration Routes...
	Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
	Route::post('register', 'Admin\RegisterController@register');
	// Password Reset Routes...
	Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('password/reset', 'Admin\ResetPasswordController@reset');

	// Route::middleware('admin.guest')->group(function(){
		Route::get('/home','AdminController@index');
		Route::get('/getlist', 'AdminController@getList');
		Route::resource('admin_res','AdminController');
		Route::get('add','AdminController@add');
		Route::post('home','AdminController@store');
		Route::post('categories', 'AdminController@getcategories');
		Route::post('vendors', 'AdminController@getvendors');
		Route::post('sizes', 'AdminController@getsizes');
		Route::post('colors', 'AdminController@getcolors');
		Route::get('detail/getlist/{id}', 'ProductDetailController@getList');
		Route::get('detail/getlist/edit/{id}', 'ProductDetailController@edit');
		Route::post('detail/getlist/update/{id}', 'ProductDetailController@update');
		Route::post('detail/getlist/{id}', 'ProductDetailController@store');
		Route::delete('detail/getlist/{id}', 'ProductDetailController@destroy');

		Route::get('/color','ColorController@index');
		Route::get('color/getlist','ColorController@getList');
		Route::post('/color','ColorController@store');
//     return view('welcome');
// });


});