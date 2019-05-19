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

Route::get('/', 'UserController@index')->name('user')->middleware(['auth', 'job']);

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/admin_post', 'AdminController@post')->name('admin.post')->middleware('auth');
Route::get('/admin_create', 'AdminController@create')->name('admin.create')->middleware('auth');
Route::get('/admin_edit', 'AdminController@edit')->name('admin.edit')->middleware('auth');
Route::get('/admin_manage', 'AdminController@index')->name('admin.manage')->middleware('auth');
Route::get('/article', 'UserController@article')->name('article');
Route::get('/work', 'UserController@work')->name('work')->middleware('auth');
Route::get('/fashion', 'UserController@fashion')->name('fashion')->middleware('auth');
Route::get('/money', 'UserController@money')->name('money')->middleware('auth');
Route::get('/healthy', 'UserController@healthy')->name('health')->middleware('auth');
Route::get('/calender', 'UserController@calender')->name('calender')->middleware('auth');
Route::post('/upload_article', 'UploadController@index')->name('upload.article')->middleware('auth');
Route::get('/admin/{id}/delete', 'AdminController@destroy')->name('admin.delete')->middleware('auth');
Route::post('/healthy/tambah', 'StoreController@health')->name('health.tambah')->middleware('auth');
Route::post('/money/tambah', 'StoreController@money')->name('money.tambah')->middleware('auth');
Route::post('/work/tambah', 'StoreController@work')->name('work.tambah')->middleware('auth');
Route::post('/fashion/tambah', 'StoreController@fashion')->name('fashion.tambah')->middleware('auth');
