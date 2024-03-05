<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('home');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/term-and-condition', 'AuthController@term_and_condition');

Route::match(['post', 'get'],'/login', 'AuthController@login');
Route::match(['post', 'get'],'/register', 'AuthController@register');
Route::get('/verify', 'AuthController@verify');

/*admin Routes*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth' => 'Admin']],function(){

	Route::get('/dashboard/', 'UsersController@dashboard');
	Route::get('/profile/', 'UsersController@profile');
	Route::post('/profile/', 'UsersController@profile');
	Route::get('/logout/', 'UsersController@logout');

	Route::get('/notification/delete/{id}', 'UsersController@notification_delete');
	Route::get('/notification/all/delete', 'UsersController@notification_delete_all');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	/*Application CRUD*/
	Route::get('application', 'ApplicationController@index');
	Route::get('application/create', 'ApplicationController@create');
	Route::get('application/edit/{id}', 'ApplicationController@edit');
	Route::get('application/view/{id}', 'ApplicationController@view');
	Route::post('application/status/{id}', 'ApplicationController@status');
	Route::post('application/personal/update/{id}', 'ApplicationController@personal_update');
	Route::post('application/education/update/{id}', 'ApplicationController@education_update');
	Route::post('application/professional/update/{id}', 'ApplicationController@professional_update');
	Route::get('application/complete/save/{id}', 'ApplicationController@save');
	Route::post('application/update/{id}', 'ApplicationController@update');
	Route::get('application/delete/{id}', 'ApplicationController@delete');


	/*Document CRUD*/
	Route::get('document', 'DocumentController@index');
	Route::get('document/create', 'DocumentController@create');
	Route::get('document/view/{id}', 'DocumentController@view');
	Route::post('document/request', 'DocumentController@request');
	Route::post('document/request/update/{id}', 'DocumentController@update_request');
	Route::get('document/edit/{id}', 'DocumentController@edit');
	Route::post('document/store', 'DocumentController@store');
	Route::post('document/update/{id}', 'DocumentController@update');
	Route::get('document/delete/{id}', 'DocumentController@delete');
	
	
	Route::get('payment', 'PaymentController@index');
	Route::post('payment/store', 'PaymentController@store');
	Route::post('payment/update/{id}', 'PaymentController@update');
	Route::get('payment/delete/{id}', 'PaymentController@delete');

	Route::get('coupon', 'CouponController@index');
	Route::post('coupon/store', 'CouponController@store');
	Route::post('coupon/update/{id}', 'CouponController@update');
	Route::get('coupon/delete/{id}', 'CouponController@delete');

	Route::get('report', 'ReportController@index');
	Route::post('report/store', 'ReportController@store');
	Route::post('report/update/{id}', 'ReportController@update');
	Route::get('report/delete/{id}', 'ReportController@delete');
	

	Route::get('help-center', 'HelpController@index');


});



/*User Routes*/
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth' => 'User']],function(){

	Route::get('/dashboard/', 'UsersController@dashboard');
	Route::get('/profile/', 'UsersController@profile');
	Route::post('/profile/', 'UsersController@profile');
	Route::get('/logout/', 'UsersController@logout');

	Route::get('/notification/delete/{id}', 'UsersController@notification_delete');
	Route::get('/notification/all/delete', 'UsersController@notification_delete_all');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	/*Application CRUD*/
	Route::get('application', 'ApplicationController@index');
	Route::get('application/create', 'ApplicationController@create');
	Route::get('application/edit/{id}', 'ApplicationController@edit');
	Route::get('application/view/{id}', 'ApplicationController@view');
	Route::post('application/personal/update/{id}', 'ApplicationController@personal_update');
	Route::post('application/education/update/{id}', 'ApplicationController@education_update');
	Route::post('application/professional/update/{id}', 'ApplicationController@professional_update');
	Route::get('application/complete/save/{id}', 'ApplicationController@save');
	Route::post('application/store', 'ApplicationController@store');
	Route::post('application/update/{id}', 'ApplicationController@update');
	Route::get('application/delete/{id}', 'ApplicationController@delete');
	
	/*Document CRUD*/
	Route::get('document', 'DocumentController@index');
	Route::get('document/create', 'DocumentController@create');
	Route::get('document/view/{id}', 'DocumentController@view');
	Route::post('document/request', 'DocumentController@request');
	Route::post('document/request/update/{id}', 'DocumentController@update_request');
	Route::get('document/upload/{id}', 'DocumentController@upload');
	Route::post('document/upload/update/{id}', 'DocumentController@upload_update');
	Route::post('document/store', 'DocumentController@store');
	Route::post('document/update/{id}', 'DocumentController@update');
	Route::get('document/delete/{id}', 'DocumentController@delete');


	Route::get('payment', 'PaymentController@index');
	Route::post('payment/coupon/pay', 'PaymentController@coupon_pay');
	Route::get('payment/request', 'PaymentController@request');
	
	Route::get('report', 'ReportController@index');
	

	Route::get('help-center', 'HelpController@index');


});





Route::get('cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    die("Cash Cleard");
});