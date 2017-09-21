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

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');



  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::resource('/home1','AdminAuth\HomeController');
  Route::post('techniciens/approve1','AdminAuth\HomeController@approve')->name('approve');
  Route::get('techniciens/listes','AdminAuth\HomeController@index1')->name('index');

  Route::get('index', 'AdminAuth\NotificationController@index');
  Route::get('notification', 'AdminAuth\NotificationController@notification');
  Route::get('notification/{id}', 'AdminAuth\NotificationController@markAsRead');
  Route::get('notification/delete/{id}', 'AdminAuth\NotificationController@delete');
  Route::resource('services','AdminAuth\ServiceController');
  Route::post('changeStatus', array('as' => 'changeStatus', 'uses' => 'AdminAuth\ServiceController@changeStatus'));

  Route::resource('profile','AdminAuth\ProfileController');

});



Route::group(['prefix' => 'client'], function () {
  Route::get('/login', 'ClientAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::post('/logout', 'ClientAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'technicien'], function () {
  Route::get('/login', 'TechnicienAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'TechnicienAuth\LoginController@login');
  Route::post('/logout', 'TechnicienAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'TechnicienAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'TechnicienAuth\RegisterController@register');

  Route::post('/password/email', 'TechnicienAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'TechnicienAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'TechnicienAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'TechnicienAuth\ResetPasswordController@showResetForm');
});
