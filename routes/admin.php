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