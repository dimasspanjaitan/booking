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
            'parent_id' => 0,
            'name' => 'renungan',
            'label' => 'RENUNGAN',
            'url' => '/renungan',
            'icon' => 'fa fa-list'
        ]);
    }
}
