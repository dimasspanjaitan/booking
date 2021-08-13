<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Renungan;
use App\Models\Admin;

class RenunganController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $renungans = Renungan::with('admin')->orderBy('id', 'desc')->get();

        return view('admin.pages.renungan.list', compact('renungans'));
    }
}
