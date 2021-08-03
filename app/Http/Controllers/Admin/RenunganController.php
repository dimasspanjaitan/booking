<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renungan;

class RenunganController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $renungans = Renungan::all();

        return view('admin.pages.renungan.list', compact('renungans'));
    }
}
