<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Renungan;

class RenunganController extends BaseController
{
    public function destroy(Request $request){
    	$data = $request->all();
    	$renungan = Renungan::find($data['id']);
    	if($renungan->delete()){
    		return $this->json_return('success','','Berhasil Menghapus Data',200);
    	}else{
    		return $this->json_return('error','','Gagal Menghapus Data',500);
    	}
    	
    }
}
