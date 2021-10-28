<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Seat,
    SeatGrup,
    
};

class SeatController extends Controller
{
    public function index(){
        $seat_groups = SeatGrup::all();

        $seat_grouped = [];


        $seat = Seat::get()->where('status', 1)->groupBy('seat_grup_id');
        // dd($seat);

        foreach($seat as  $key => $st){
            
            $seat_grouped[$seat_groups->find($key)->name] = $st;
        }

        // dd($seat_grouped);

        return view('admin.pages.seat.list', compact('seat_grouped'));
    }
}
