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
        $path = explode('\\',get_class($this));
        $controller = $path[count($path)-1];
        // dd($controller  );
        $page['title'] = preg_split('/(?=[A-Z])/',$controller)[1];
        // $page['status'] = 'Module';
        session()->forget('menus');


        $menus = Menu::where('parent_id',0)->with('children')->get()->sortBy('parent_id');

        View::share('menus',$menus);
    }
   
}
