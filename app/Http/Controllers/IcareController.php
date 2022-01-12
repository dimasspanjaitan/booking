<?php

namespace App\Http\Controllers;

use App\Models\Icare;

use Illuminate\Http\Request;

class IcareController extends Controller
{
    public function index()
    {
        $icares = Icare::all();

        $icares->map(function($i){
            if(empty($i->image)){
                $i->image = 'assets/img/event-default.jpg';
            }
        });

        return view('pages.icare.index', compact('icares'));
    }
}
