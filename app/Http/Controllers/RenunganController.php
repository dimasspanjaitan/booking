<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;

class RenunganController extends Controller
{
    public function index(){
        $renungan_latest = Renungan::latest()->with('admin')->first();
        // dd($renungan_latest);   

        return view('pages.renungan.latest', compact('renungan_latest'));
    }
}
