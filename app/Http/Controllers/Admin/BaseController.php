<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use View;

class BaseController extends Controller
{
    public function __construct()
    {
        $menus = Menu::getUserMenu();

        View::share('menus',$menus);
    }
   
}
