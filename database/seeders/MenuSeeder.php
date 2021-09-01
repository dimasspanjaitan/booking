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
                'url' => '',
                'icon' => 'ti-home'
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'name' => 'renungan',
                'label' => 'RENUNGAN',
                'url' => 'renungan',
                'icon' => 'ti-book'
            ],
            [
                'id' => 11,
                'parent_id' => 1,
                'name' => 'user',
                'label' => 'User',
                'url' => 'user_list',
                'icon' => 'fa fa-user'
            ],
            [
                'id' => 12,
                'parent_id' => 1,
                'name' => 'role',
                'label' => 'Role',
                'url' => 'role_list',
                'icon' => 'fa fa-gear'
            ],
            [
                'id' => 13,
                'parent_id' => 1,
                'name' => 'admin',
                'label' => 'Admin',
                'url' => 'admin_list',
                'icon' => 'fa fa-key'
            ],
            [
                'id' => 21,
                'parent_id' => 2,
                'name' => 'renungan_list',
                'label' => 'List',
                'url' => 'renungan_list',
                'icon' => 'fa fa-list'
            ]
        ]);
    }
}
