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
            'price' => 6000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 1,
            'name' => '鰹',
            'number' => 102,
            'price' => 6000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 1,
            'name' => '鮎',
            'number' => 103,
            'price' => 7500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 1,
            'name' => '靭',
            'number' => 104,
            'price' => 7500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 1,
            'name' => '鰯',
            'number' => 105,
            'price' => 8000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 2,
            'name' => '鱧',
            'number' => 106,
            'price' => 7500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 2,
            'name' => '鰻',
            'number' => 107,
            'price' => 8000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 2,
            'name' => '鯛',
            'number' => 108,
            'price' => 9500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 2,
            'name' => '鯖',
            'number' => 109,
            'price' => 9500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '桜',
            'number' => 201,
            'price' => 12500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '紅葉',
            'number' => 202,
            'price' => 13000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '鬼灯',
            'number' => 203,
            'price' => 15000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '花見月',
            'number' => 204,
            'price' => 17000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 3,
            'name' => '牡丹',
            'number' => 205,
            'price' => 18000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 4,
            'name' => '藤',
            'number' => 206,
            'price' => 16500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 4,
            'name' => '秋桜',
            'number' => 207,
            'price' => 19000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 4,
            'name' => '紫陽花',
            'number' => 208,
            'price' => 22000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 4,
            'name' => '楓',
            'number' => 209,
            'price' => 25000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 5,
            'name' => '椿',
            'number' => 301,
            'price' => 30000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 5,
            'name' => '楊梅',
            'number' => 302,
            'price' => 32500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 5,
            'name' => '山桜桃梅',
            'number' => 303,
            'price' => 35000,
        ];
        DB::table('rooms')->insert($param);


        $param = [
            'room_category_id' => 6,
            'name' => '浜薊',
            'number' => 304,
            'price' => 30000,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 6,
            'name' => '菫',
            'number' => 305,
            'price' => 32500,
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_category_id' => 6,
            'name' => '朝顔',
            'number' => 306,
            'price' => 35000,
        ];
        DB::table('rooms')->insert($param);
    }
}
