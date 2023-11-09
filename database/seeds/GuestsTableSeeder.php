<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '大森拓実',
            'address' => '奈良県奈良市適当町111-11',
            'tel' => '000-0000-0000',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '苗字名前',
            'address' => '東京都渋谷区適当111-11',
            'tel' => '012-3456-7890',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '山田太郎',
            'address' => '大阪府大阪市適当区111-11',
            'tel' => '111-1111-1111',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '田中花子',
            'address' => '高知県高知市適当町111-11',
            'tel' => '222-2222-2222',
        ];
        DB::table('guests')->insert($param);
    }
}
