<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_room extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'room_id' => 'required',
        'checkin_date' => 'required',
        'price' => 'required'
    );

}


