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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('renungan', 'App\Http\Controllers\RenunganController@index')->name('renungan');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('adminLogout');