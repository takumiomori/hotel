<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'guest_id' => 1,
            'number_guests' => '3',
            'checkin' => '2023-11-10',
            'checkout' => '2023-11-11',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 2,
            'number_guests' => '5',
            'checkin' => '2023-11-16',
            'checkout' => '2023-11-17',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 3,
            'number_guests' => '4',
            'checkin' => '2023-11-15',
            'checkout' => '2023-11-16',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 4,
            'number_guests' => '2',
            'checkin' => '2023-11-20',
            'checkout' => '2023-11-21',
        ];
        DB::table('reservations')->insert($param);


    }
}
