<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkinDate1 = Carbon::create(2023, 11, 10);
        $checkoutDate1 = Carbon::create(2023, 11, 11);
        $param = [
            'guest_id' => 1,
            'number_guests' => '3',
            'checkin' => $checkinDate1,
            'checkout' => $checkoutDate1,
        ];
        DB::table('reservations')->insert($param);

        $checkinDate2 = Carbon::create(2023, 11, 16);
        $checkoutDate2 = Carbon::create(2023, 11, 17);
        $param = [
            'guest_id' => 2,
            'number_guests' => '5',
            'checkin' => $checkinDate2,
            'checkout' => $checkoutDate2,
        ];
        DB::table('reservations')->insert($param);

        $checkinDate3 = Carbon::create(2023, 11, 15);
        $checkoutDate3 = Carbon::create(2023, 11, 16);
        $param = [
            'guest_id' => 3,
            'number_guests' => '4',
            'checkin' => $checkinDate3,
            'checkout' => $checkoutDate3,
        ];
        DB::table('reservations')->insert($param);

        $checkinDate4 = Carbon::create(2023, 11, 20);
        $checkoutDate4 = Carbon::create(2023, 11, 21);
        $param = [
            'guest_id' => 4,
            'number_guests' => '2',
            'checkin' => $checkinDate4,
            'checkout' => $checkoutDate4,
        ];
        DB::table('reservations')->insert($param);


    }
}
