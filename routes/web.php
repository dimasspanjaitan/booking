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
Route::get('/', 'App\Http\Controllers\GuestController@index')->name('guest');
Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('renungan', 'App\Http\Controllers\RenunganController@index')->name('renungan');

Route::get('event', 'App\Http\Controllers\EventController@index')->name('event');
Route::get('event/detail/{slug}', 'App\Http\Controllers\EventController@detail')->name('event.detail');
Route::get('event/detail/open-image/{seat_id}', 'App\Http\Controllers\EventController@openImage')->name('event.detail.open-image');
Route::get('event/detail/download/{id}', 'App\Http\Controllers\EventController@download')->name('event.detail.download');
Route::post('event/detail/save', 'App\Http\Controllers\EventController@detail_save')->name('event.detail.save');

Route::get('icare', 'App\Http\Controllers\IcareController@index')->name('icare');
Route::get('about', 'App\Http\Controllers\AboutController@index')->name('about');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('adminLogout');

// CONSOLE URL
// 

Route::get('/symlink', function (Request $request) {
	Artisan::call('storage:link');
	echo '<script>alert("Create Symlink Success")</script>';
});

Route::get('/db-seed', function (Request $request) {
	Artisan::call('db:seed');
	echo '<script>alert("Seed Success")</script>';
});

Route::get('/cc', function (Request $request) {
	Artisan::call('cache:clear');
	echo '<script>alert("cache clear Success")</script>';
});
Route::get('/ccc', function (Request $request) {
	Artisan::call('config:cache');
	echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function (Request $request) {
	Artisan::call('view:clear');
	echo '<script>alert("view clear Success")</script>';
});
Route::get('/rc', function (Request $request) {
	Artisan::call('route:cache');
	echo '<script>alert("route cache Success")</script>';
});
Route::get('/rcc', function (Request $request) {
	Artisan::call('route:clear');
	echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function (Request $request) {
	Artisan::call('config:clear');
	echo '<script>alert("config clear Success")</script>';
});
Route::get('/opt', function (Request $request) {
	Artisan::call('optimize');
	echo '<script>alert("Optimize Success")</script>';
});
Route::get('/vc', function (Request $request) {
	Artisan::call('view:clear');
	echo '<script>alert("view clear Success")</script>';
});
Route::get('/rc', function (Request $request) {
	Artisan::call('route:cache');
	echo '<script>alert("route cache Success")</script>';
});
Route::get('/rcc', function (Request $request) {
	Artisan::call('route:clear');
	echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function (Request $request) {
	Artisan::call('config:clear');
	echo '<script>alert("config clear Success")</script>';
});