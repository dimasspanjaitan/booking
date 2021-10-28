<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\{
    BookingSeat as BS
};

class EventController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function booking(){
        return view('admin.pages.event.booking');
    }

    public function feed(){
        $data = BS::with('seat')->orderBy('id', 'desc')->get();
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
