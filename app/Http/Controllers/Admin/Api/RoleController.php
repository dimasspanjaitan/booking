<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends BaseController
{
    public function destroy(Request $request){
    	$data = $request->all();
    	$role = Role::find($data['id']);
    	if($role->delete()){
    		return $this->json_return('success','','Berhasil Menghapus Data',200);
    	}else{
    		return $this->json_return('error','','Gagal Menghapus Data',500);
    	}
    	
    }
}
