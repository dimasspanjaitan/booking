<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Event
};

class GuestController extends Controller
{
    public function index()
    {
        $events = Event::all();

        $events->map(function($e){
            if(empty($e->image)){
                $e->image = 'assets/img/event-default.jpg';
            }
        });

        return view('welcome', compact('events'));
    }
}
