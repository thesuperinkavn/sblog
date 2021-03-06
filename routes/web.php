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

Route::get('/', 'BlogController@index')->name('Blog');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::any('/approve', 'AdminController@approve')->name('admin.approve');
    Route::any('/unapprove', 'AdminController@unapprove')->name('admin.unapprove');
    Route::any('/dashboard', 'AdminController@index')->name('admin.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::resource('post', 'PostController');
Route::get('/post/destroy', 'PostController@destroy');
Route::post('/post/destroy', 'PostController@destroy');