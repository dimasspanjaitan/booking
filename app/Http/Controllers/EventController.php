<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Http\Requests\EventRequest;
use App\Models\{
    Event,
    Seat,
    SeatGrup,
    BookingSeat as BS
};
use File;
use Response;
use PhpParser\NodeVisitor\FirstFindingVisitor;

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
        $seat = Seat::where('id', $data['seat_id'])->first();
        $b_seats = BS::all();

        // dd($b_seat);

        if (empty($event)) {
            return redirect()->back()->with('error', 'Maaf, EVENT tidak tersedia!');
        }

        foreach ($b_seats as $key => $b_seat) {
            if($data['seat_id'] == $b_seat->seat_id){
                return redirect()->back()->with('error', 'Maaf, Kursi sudah dipesan. Mohon pesan kursi yang lain!');
            }
        }

        $booking = new BS();
        $booking->seat_id = $data['seat_id'];
        $booking->name = $data['name'];
        $booking->phone = $data['phone'];
        $booking->event_id = $event->id;
        $booking->code = '/assets/img/booking-code/'.$seat->code.'.jpg';
        
        if ($booking->save()) {
            return redirect()->route('event.detail.open-image', $data['seat_id'])->with('success', 'BOOKING BERHASIL! Tempat duduk Anda akan kami siapkan. Terima Kasih');
        }else{
            return redirect()->back()->with('error', 'Data yang anda masukkan tidak sesuai ketentuan');
        }
    }

    public function openImage(Request $request){
        if (empty($request->seat_id)) {
            return redirect()->back();
        }
        $booking = BS::where('seat_id', $request->seat_id)->first();

        return view('pages.event.open-image', compact('booking'));
    }

    public function download(Request $request){
        $url = BS::where('id', $request->id)->first();
        $filepath = public_path($url->code);

        if (file_exists($filepath)) {
            return Response::download($filepath);
        }else{
            return redirect()->back()->with('error', 'MAAF! Kode Booking untuk bangku yang anda pesan belum tersedia.');
        }
    }
}
