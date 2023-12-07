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
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++){
        $param = [
            'name' => $faker->name(),
            'address' => $faker->address(),
            'tel' => $faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('guests')->insert($param);
        }
    }
}
