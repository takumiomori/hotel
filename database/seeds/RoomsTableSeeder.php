<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_category_id' => 1,
            'name' => '鯨',
            'number' => 101,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 1,
            'name' => '鰹',
            'number' => 102,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 2,
            'name' => '鱧',
            'number' => 103,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 2,
            'name' => '鰻',
            'number' => 104,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '桜',
            'number' => 201,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '紅葉',
            'number' => 202,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 4,
            'name' => '藤',
            'number' => 203,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 4,
            'name' => '秋桜',
            'number' => 204,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 5,
            'name' => '椿',
            'number' => 301,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 6,
            'name' => '浜薊',
            'number' => 302,
        ];
        DB::table('rooms')->insert($param);
    }
}
