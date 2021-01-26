<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Side Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
	Route::namespace('Auth')->group(function(){
	    /*Admin Register Routes */
		Route::get('/register', 'RegisterController@adminRegisterForm')->name('register');
		Route::post('/register','RegisterController@register');
		/*Admin Login Routes*/
		Route::get('/login','LoginController@showAdminLoginForm')->name('login');
		Route::post('/login','LoginController@login')->name('login.submit');
		Route::post('/logout','LoginController@logout')->name('logout');
		/*Admin Forgot Password Routes*/
		Route::get('/password/reset','ForgotPasswordController@showAdminLinkRequestForm')->name('password.request');
		Route::post('/password/email','ForgotPasswordController@sendAdminResetLinkEmail')->name('password.email');
		/*Admin Reset Password Routes*/
		Route::get('/password/reset/{token}','ResetPasswordController@showAdminResetForm')->name('password.reset');
		Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
	});
	// Route::group(['middleware' => ['auth:admin']], function ($router) {
	// 	$router->get('/dashboard','DashboardController@index')->name('dashboard');
	// });
	
});