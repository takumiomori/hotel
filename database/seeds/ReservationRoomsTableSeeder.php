<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_id' => 1,
            'room_id' => 1,
            'checkin_date' => '2023-11-10',
            'price' => 15000,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 2,
            'room_id' => 2,
            'checkin_date' => '2023-11-16',
            'price' => 13000,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 3,
            'room_id' => 4,
            'checkin_date' => '2023-11-15',
            'price' => 13000,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 4,
            'room_id' => 5,
            'checkin_date' => '2023-11-20',
            'price' => 25000,
        ];
        DB::table('reservation_room')->insert($param);
    }
}
