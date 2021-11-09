<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seat::truncate();
        $data_seats = [];

        $seats = [
            'A' => [
                'rows' => 11,
                'columns' => 10,
                'group_id' => 1
            ],
            'B' => [
                'rows' => 5,
                'columns' => 10,
                'group_id' => 2
            ],
            'C' => [
                'rows' => 4,
                'columns' => 20,
                'group_id' => 3
            ]
        ];
        $number = 0;
        foreach ($seats as $key => $type) {
            for ($row=1; $row <= (int) $type['rows'] ; $row++) { 
                for ($col=1; $col <= (int) $type['columns'] ; $col++) {
                    $number++;
                    $increment = str_pad($number, 3, '0', STR_PAD_LEFT);
                    $code = $key.$increment;

                    array_push($data_seats,[
                        'code' => $code,
                        'seat_grup_id' => $type['group_id'],
                        'row' => $row,
                        'column' => $col,
                        'image' => '/assets/img/map/'.$code.'.jpg',
                        'status' => 1
                    ]);
                }
            }
            
        }

        Seat::insert($data_seats);

        // dd($data_seats);

        // Seat::insert([
        //     [
        //         'code' => 'A001',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A002',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A003',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A004',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A005',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A006',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A007',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A008',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A009',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A010',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A011',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A012',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A013',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A014',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A015',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A016',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A017',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A018',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A019',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A020',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A021',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A022',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A023',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A024',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A025',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A026',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A027',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A028',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A029',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A030',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A031',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A032',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A033',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A034',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A035',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A036',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A037',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'A038',
        //         'seat_grup_id' => '1'
        //     ],
        //     [
        //         'code' => 'B001',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B002',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B003',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B004',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B005',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B006',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B007',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B008',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B009',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B010',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B011',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B012',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B013',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B014',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B015',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B016',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B017',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B018',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B019',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B020',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B021',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B022',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B023',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B024',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B025',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B026',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B027',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B028',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B029',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B030',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B031',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B032',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B033',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B034',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B035',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B036',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B037',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'B038',
        //         'seat_grup_id' => '2'
        //     ],
        //     [
        //         'code' => 'C001',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C002',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C003',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C004',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C005',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C006',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C007',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C008',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C009',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C010',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C011',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C012',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C013',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C014',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C015',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C016',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C017',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C018',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C019',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C020',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C021',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C022',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C023',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C024',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C025',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C026',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C027',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C028',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C029',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C030',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C031',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C032',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C033',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C034',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C035',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C036',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C037',
        //         'seat_grup_id' => '3'
        //     ],
        //     [
        //         'code' => 'C038',
        //         'seat_grup_id' => '3'
        //     ]

        // ]);
    }
}
