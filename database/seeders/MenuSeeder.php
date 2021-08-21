<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();

        Menu::insert([
            [
                'id' => 1,
                'parent_id' => 0,
                'name' => 'master',
                'label' => 'MASTER',
                'url' => '/dashboard',
                'icon' => 'ti-home'
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'name' => 'renungan',
                'label' => 'RENUNGAN',
                'url' => '/renungan',
                'icon' => 'ti-book'
            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'name' => 'role',
                'label' => 'ROLE',
                'url' => '/role',
                'icon' => 'ti-eye'
            ],
            [
                'id' => 21,
                'parent_id' => 2,
                'name' => 'renungan_list',
                'label' => 'List',
                'url' => '/renungan/list',
                'icon' => 'ti-list'
            ],
            [
                'id' => 11,
                'parent_id' => 1,
                'name' => 'admin',
                'label' => 'Admin',
                'url' => '/role/list',
                'icon' => 'ti-list'
            ]
        ]);
    }
}
