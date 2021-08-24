<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        Admin::insert([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gbipelita.com',
            'password' => bcrypt('admin123'),
            'is_active' => 1
        ]);
    }
}
