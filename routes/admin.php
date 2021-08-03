<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

/*
|----------------------------------------------------------------------------
| Admin Routes
|----------------------------------------------------------------------------
*/

Route::group([
    'as' => 'admin.',
    'middleware' => 'adminauth'
    ], function (Router $router) {
        $controller = "DashboardController@";
        $router->get('dashboard',$controller.'index')->name('dashboard');
    }
);

Route::group([
    'as' => 'admin.',
    'middleware' => 'adminauth'
    ], function (Router $router) {
        $controller = "RenunganController@";
        $router->get('renungan/list',$controller.'index')->name('renungan_list');
    }
);

Route::group([
    'as' => 'admin.',
    'middleware' => 'adminauth'
    ], function (Router $router) {
        $controller = "RoleController@";
        $router->get('role/list',$controller.'index')->name('role_list');
    }
);

//API

Route::group([
    'as' => 'api.admin.renungan.',
    'middleware' => 'adminauth'
  ], function (Router $router) {
    $controller = "Api\RenunganController@";
    $router->post('api/admin/renungan/delete',$controller.'destroy')->name('delete');
  });

  Route::group([
    'as' => 'api.admin.role.',
    'middleware' => 'adminauth'
  ], function (Router $router) {
    $controller = "Api\RoleController@";
    $router->post('api/admin/role/delete',$controller.'destroy')->name('delete');
  });