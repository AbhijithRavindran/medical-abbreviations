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

Route::get('/', 'MainController@home');
Route::get('/login', 'AdminController@loginview')->name('login');
Route::post('/login', 'AdminController@login')->name('admin_login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@dashboard');
    Route::get('/logout', 'AdminController@logout')->name('admin_logout');
    Route::get('/admin/abbreviations', 'AdminController@abbreviations_view')->name('admin_abbreviations');
    Route::get('/admin/categories', 'AdminController@categories_view')->name('admin_categories');
    Route::get('/admin/abbreviation/new', 'AdminController@new_abbreviation');
    Route::post('/admin/abbreviation/create', 'AdminController@create_abbreviation');
    Route::get('/admin/view_abbreviation/{id}', 'AdminController@view_abbreviation');
    Route::patch('/admin/update_abbreviation/{id}', 'AdminController@update_abbreviation');
    Route::get('/admin/delete_abbreviation/{id}', 'AdminController@delete_abbreviation');
    Route::get('/admin/sub_categories/{id}', 'AdminController@sub_categories_view')->name('sub_categories_view');
});

