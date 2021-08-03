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
                'parent_id' => 0,
                'name' => 'renungan',
                'label' => 'RENUNGAN',
                'url' => '/renungan',
                'icon' => 'ti-book'
            ],
            [
                'parent_id' => 1,
                'name' => 'renungan_list',
                'label' => 'List',
                'url' => '/renungan/list',
                'icon' => 'ti-list'
            ],
            [
                'parent_id' => 0,
                'name' => 'role',
                'label' => 'ROLE',
                'url' => '/role',
                'icon' => 'ti-eye'
            ],
            [
                'parent_id' => 3,
                'name' => 'role_list',
                'label' => 'List',
                'url' => '/role/list',
                'icon' => 'ti-list'
            ]
        ]);
    }
}
