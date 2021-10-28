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
    'as' => 'admin.renungan.',
    'middleware' => 'adminauth'
    ], function (Router $router) {
        $controller = "RenunganController@";
        $router->get('renungan/list',$controller.'index')->name('list');
        $router->get('renungan/form',$controller.'form')->name('form');
        $router->post('renungan/upload',$controller.'upload')->name('upload');
    }
);

Route::group([
    'as' => 'admin.role.',
    'middleware' => 'adminauth'
    ], function (Router $router) {
        $controller = "RoleController@";
        $router->get('role/list',$controller.'index')->name('list');
        $router->get('role/form',$controller.'form')->name('form');
        $router->post('role/save',$controller.'save')->name('save');
        $router->get('role/{id}/module',$controller.'module')->name('module');
        $router->post('role/module/save',$controller.'module_save')->name('module.save');
    }
);

Route::group([
    'as' => 'admin.seat.',
    'middleware' => 'adminauth'
    ], function (Router $router) {
        $controller = "SeatController@";
        $router->get('seat/list',$controller.'index')->name('list');
        $router->get('seat/form',$controller.'form')->name('form');
        $router->post('seat/save',$controller.'save')->name('save');
    }
);

Route::group([
    'as' => 'admin.event.',
    'middleware' => 'adminauth'
    ], function (Router $router){
        $controller = "EventController@";
        $router->get('event/booking',$controller.'booking')->name('booking');
        $router->get('event/booking/feed',$controller.'feed')->name('booking.feed');
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