<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeatGrup;

class SeatGrupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeatGrup::truncate();

        SeatGrup::insert([
            ['name' => 'Gedung Utama'],
            ['name' => 'Balkon'],
            ['name' => 'Teras Gereja']
        ]);
    }
}
