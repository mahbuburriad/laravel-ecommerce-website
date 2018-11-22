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

//frontent site

Route::get('/', 'HomeController@index' );


//backend site

Route::get('/admin_login', 'AdminController@login' );
Route::get('/admin', 'AdminController@index' );
Route::post('/admin-dashboard', 'AdminController@dashboard' );