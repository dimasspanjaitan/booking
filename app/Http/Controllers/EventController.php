<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\EventRequest;
use App\Models\{
    Event,
    Seat,
    SeatGrup,
    BookingSeat as BS,
    BookingSeat
};

class EventController extends Controller
{
    public function index(){
        $events = Event::all();

        $events->map(function($e){
            if(empty($e->image)){
                $e->image = 'assets/img/event-default.jpg';
            }
        });

        // dd($events);

        return view('pages.event.index', compact('events'));
    }

    public function detail(Request $request){
        if(empty($request->slug)){
            return redirect()->back();
        }

        $event = Event::where('slug', $request->slug)->first();
        if (empty($event)) {
            return redirect()->back();
        }
        $seat_groups = SeatGrup::all();
        $booking_seats = BS::where('event_id', $event->id)->get();

        $seat_grouped = [];


        $seat = Seat::get()->where('status', 1)->groupBy('seat_grup_id');
        // dd($seat);

        foreach($seat as  $key => $st){
            foreach($st as $item){
                if(!empty($booking_seats->where('seat_id', $item->id)->first())){
                    $item->has_booking = true;
                } else $item->has_booking = false;
            }
            
            $seat_grouped[$seat_groups->find($key)->name] = $st;
        }

        // dd($seat_grouped);

        return view('pages.event.detail', compact('event', 'seat_grouped'));
    }

    public function detail_save(EventRequest $request){
        $data = $request->all();
        $event = Event::where('slug', $data['slug'])->first();
        if (empty($event)) {
            return redirect()->back()->with('error', 'Maaf, EVENT tidak tersedia!');
        }

        $booking = new BS();
        $booking->seat_id = $data['seat_id'];
        $booking->name = $data['name'];
        $booking->phone = $data['phone'];
        $booking->event_id = $event->id;
        
        if ($booking->save()) {
            return redirect()->back()->with('success', 'BOOKING BERHASIL! Tempat duduk Anda akan kami siapkan. Terima Kasih');
        }else{
            return redirect()->back();
        }
        
    }
}
