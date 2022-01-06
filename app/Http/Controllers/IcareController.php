<?php

namespace App\Http\Controllers;

use App\Models\Icare;

use Illuminate\Http\Request;

class IcareController extends Controller
{
    public function index()
    {
        $icares = Icare::all();
        // dd($icares);

        return view('pages.icare.index', compact('icares'));
    }
}
