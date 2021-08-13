<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\Module;
use App\Models\RoleModule as RM;
use SebastianBergmann\Environment\Runtime;

class RoleController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        if(!empty($request->search)){
            $roles = Role::where('name','like','%'.$request->search.'%')->paginate(config('data_rows'));
        } else{
            $roles = Role::paginate(config('data_rows'));
        }

        return view('admin.pages.role.list', compact('roles'));
    }

    public function form()
    {
        return view('admin.pages.role.form');
    }

    public function save(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $role = new Role();

        unset($data['id']);
        unset($data['_token']);
        
        $role->name = $data['name'];
        if(empty($data['is_admin'])) $role->is_admin = 0;
        else $role->is_admin = $data = $data['is_admin'];

        if($role->save()){
            $modules = Module::all();

            foreach ($modules as $key => $module) {
                $rm = new RM;
                $rm->role_id = $role->id;
                $rm->module_id = $module->id;
                $rm->save();
            }

            return redirect()->route('admin.role.module', $role->id);
        }else{
            return redirect()->back();
        }
    }

    public function module(Request $request){
        $role_modules = RM::with('module', 'role')->where('role_id', $request->id)->get();
        $role = Role::findOrFail($request->id);

        $roles = Role::whereNotIn('id', [$request->id])->get();

        return view ('admin.pages.role.module', compact('role_modules', 'role', 'roles'));
    }

    public function module_save(Request $request){
        $data = $request->all();

        /**
         * Menyimpan nilai module
         */
        $role_modules = RM::where('role_id', $data['id'])->get();
        $rm_data = [];
        foreach ($role_modules as $k => $value) {            
            $permission = [
                'v' => isset($data['v_ck_'.$value->id])?$data['v_ck_'.$value->id]: 0, 
                'd' => isset($data['d_ck_'.$value->id])?$data['d_ck_'.$value->id]: 0,
                'u' => isset($data['u_ck_'.$value->id])?$data['u_ck_'.$value->id]: 0,
                'i' => isset($data['i_ck_'.$value->id])?$data['i_ck_'.$value->id]: 0
            ];
            $rm_data[$value->id] = $permission;
        }

        foreach ($rm_data as $key => $rm) {
            RM::where('id', $key)->update([
                'view' => $rm['v'],
                'delete' => $rm['d'],
                'update' => $rm['u'],
                'insert' => $rm['i']
            ]);
        }

        /**
         * Update Role
         */
        Role::where('id', $data['id'])->update([
            'name' => $data['name'],
            'is_admin' => isset($data['is_admin'])? $data['is_admin'] : 0
        ]);

        return redirect()->back();
    }
}
