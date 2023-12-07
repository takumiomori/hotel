<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reservation extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'guest_id' => 'required',
        'number_guests' => 'required',
        'checkin' => 'required',
        'checkout' => 'required'
    );

    public function guest()
    {
        return $this->belongsTo('App\Guest');
    }

    public function room()
    {
        return $this->belongsToMany('App\Room', 'reservation_room', 'reservation_id', 'room_id')->withPivot('checkin_date', 'price');
    }

    public static function getRoomPrice($n)
    {
        $data = Room::find($n);
        return $data->price;
    }
}
