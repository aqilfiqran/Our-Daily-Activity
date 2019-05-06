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

Route::get('/', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware(['auth', 'job']);

Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/admin_post', 'AdminController@post');
Route::get('/admin_create', 'AdminController@create');
Route::get('/admin_edit', 'AdminController@edit');
Route::get('/admin_manage', 'AdminController@index');
Route::get('/article', 'UserController@article');
Route::get('/work', 'UserController@work');
