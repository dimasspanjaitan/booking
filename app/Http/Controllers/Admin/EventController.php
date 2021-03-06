<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\{
    BookingSeat as BS,
    Event
};
use Carbon\carbon;
class EventController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list(){
        $events = Event::all();
        // dd($events);
        $events->map(function($e){
            if(empty($e->event_date)){
                $e->event_date = Carbon::createFromFormat('Y-m-d H:i:s', $e->event_date)->format('d-m-Y');
            }
        });

        return view('admin.pages.event.list', compact('events'));
    }

    public function edit(Request $request, $id){
        $event = Event::findOrFail($id);
        if (empty($event)) return redirect()->back();
        // dd($event);

        return view('admin.pages.event.form', compact('event'));
    }

    public function save(Request $request){
        
    }
    
    public function booking(Request $request){
        $data = [];
        if(!empty($request->event_id)){
            $data = BS::with('seat')->where('event_id', $request->event_id)->orderBy('seat_id', 'asc')->get();
            $data->map(function($d){
                if(empty($d->created_at)){
                    $d->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $d->created_at)->format('d-m-Y');
                }
            });
        }

        $events = Event::whereYear('created_at', '=', date('Y'))->get();
        
        return view('admin.pages.event.booking', compact('data', 'events'));
    }

    public function feed(){
        $data = BS::with('seat')->orderBy('seat_id', 'asc')->get();
        // dd($data);
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->addColumn('code', function($row){
                return $row->seat->code;
            })
            ->addColumn('event_name', function($row){
                return $row->event->name;
            })
            ->rawColumns(['action'])
            ->make(true);

    }
}
