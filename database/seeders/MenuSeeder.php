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
                'name' => 'dashboard',
                'label' => 'DASHBOARD',
                'url' => '/dashboard',
                'icon' => 'ti-home'
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'name' => 'master',
                'label' => 'MASTER',
                'url' => '',
                'icon' => 'ti-server'
            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'name' => 'renungan',
                'label' => 'RENUNGAN',
                'url' => '/renungan',
                'icon' => 'ti-book'
            ],
            [
                'id' => 4,
                'parent_id' => 0,
                'name' => 'event',
                'label' => 'EVENT',
                'url' => '/event',
                'icon' => 'ti-notepad'
            ],
            [
                'id' => 21,
                'parent_id' => 2,
                'name' => 'user',
                'label' => 'User',
                'url' => '/user/list',
                'icon' => 'fa fa-user'
            ],
            [
                'id' => 22,
                'parent_id' => 2,
                'name' => 'role',
                'label' => 'Role',
                'url' => '/role/list',
                'icon' => 'fa fa-gear'
            ],
            [
                'id' => 23,
                'parent_id' => 2,
                'name' => 'admin',
                'label' => 'Admin',
                'url' => '/admin/list',
                'icon' => 'fa fa-key'
            ],
            [
                'id' => 24,
                'parent_id' => 2,
                'name' => 'seat',
                'label' => 'Kursi',
                'url' => '/seat/list',
                'icon' => 'fa fa-list'
            ],
            [
                'id' => 31,
                'parent_id' => 3,
                'name' => 'renungan_list',
                'label' => 'List',
                'url' => '/renungan/list',
                'icon' => 'fa fa-list'
            ],
            [
                'id' => 41,
                'parent_id' => 4,
                'name' => 'list',
                'label' => 'List Event',
                'url' => '/event/list',
                'icon' => 'fa fa-list'
            ],
            [
                'id' => 42,
                'parent_id' => 4,
                'name' => 'booking_seat',
                'label' => 'Booking Kursi',
                'url' => '/event/booking',
                'icon' => 'fa fa-bookmark'
            ]
            
        ]);
    }
}
