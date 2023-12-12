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
            'day' => 1,
            'price' => 15000,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 2,
            'room_id' => 2,
            'day' => 1,
            'price' => 13000,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 3,
            'room_id' => 4,
            'day' => 1,
            'price' => 13000,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 4,
            'room_id' => 5,
            'day' => 1,
            'price' => 25000,
        ];
        DB::table('reservation_room')->insert($param);
    }
}
