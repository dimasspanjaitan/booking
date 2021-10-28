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

    public function form(){
        return view ('admin.pages.renungan.form');
    }

    public function upload(Request $request){
        $data = $request->all();
        // dd($data);

        

        if (empty($data)) {
            return redirect()->back();
        }

        $renungan = new Renungan();
        $renungan->admin_id = $data['admin_id'];
        $renungan->thema = $data['thema'];
        $renungan->verse = $data['verse'];
        $renungan->content = $data['content'];
        $renungan->thema = $data['thema'];
        $renungan->slug = $data['slug'];

        if($renungan->save()){
            return redirect()->route('admin.renungan.list')->with('success', 'Berhasil menambahkan Renungan');
        }else{
            return redirect()->back();
        }
    }
}
