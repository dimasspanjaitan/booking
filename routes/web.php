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
Route::get('event', 'App\Http\Controllers\EventController@index')->name('event');
Route::get('event/detail/{slug}', 'App\Http\Controllers\EventController@detail')->name('event.detail');
Route::get('event/detail/open-image/{seat_id}', 'App\Http\Controllers\EventController@openImage')->name('event.detail.open-image');
Route::get('event/detail/download/{id}', 'App\Http\Controllers\EventController@download')->name('event.detail.download');

Route::post('event/detail/save', 'App\Http\Controllers\EventController@detail_save')->name('event.detail.save');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('adminLogout');