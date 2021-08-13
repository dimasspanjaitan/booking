<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleModule;
use App\Models\Module;
use App\Models\Role;


class RoleModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleModule::truncate();

        $role_modules = [];
        $modules = Module::all();
        $roles = Role::all();

        foreach ($roles as $key => $role) {
            foreach ($modules as $key => $module) {
                $rm = [
                    'role_id' => $role->id,
                    'module_id' => $module->id,
                    'view' => 1,
                    'delete' => 1,
                    'update' => 1,
                    'insert' => 1
                ];

                array_push($role_modules, $rm);
            }
        }

        RoleModule::insert($role_modules);
    }
}
