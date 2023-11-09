<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '和室A',
            'capacity' => 4,
        ];
        DB::table('room_categories')->insert($param);

        $param = [
            'name' => '和室B',
            'capacity' => 6,
        ];
        DB::table('room_categories')->insert($param);

        $param = [
            'name' => '洋室A',
            'capacity' => 3,
        ];
        DB::table('room_categories')->insert($param);

        $param = [
            'name' => '洋室B',
            'capacity' => 4,
        ];
        DB::table('room_categories')->insert($param);

        $param = [
            'name' => '和スイート',
            'capacity' => 2,
        ];
        DB::table('room_categories')->insert($param);

        $param = [
            'name' => '洋スイート',
            'capacity' => 2,
        ];
        DB::table('room_categories')->insert($param);
    }
}
