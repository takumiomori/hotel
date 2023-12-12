<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Carbon\Carbon;

class Room extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'room_category_id' => 'required',
        'name' => 'required',
        'number' => 'required',
        'price' => 'required',
    );

    public function room_category(){
        return $this->belongsTo('App\RoomCategory');
    }

    public function reservation()
    {
        return $this->belongsToMany('App\Reservation','reservation_room','room_id','reservation_id')->withPivot('checkin_date','price');
    }

    public static function getCategoryName($n)
    {
        $data = RoomCategory::find($n);
        return $data->name;
    }

    //改修中
    public function scopeMatchCategory($query, $n)
    {
        return $query->where('room_category_id', '=', $n);
    }

    public function  scopeAvailableDate($query, $n1, $n2){

        $checkIn = new Carbon($n1);
        $checkOut = new Carbon($n2);

        return $query->whereDoesntHave('reservation', function ($query) use ($checkIn, $checkOut) {
            $query->where(function ($query) use ($checkIn, $checkOut) {
                $query->join('reservation_room', 'rooms.id', '=', 'reservation_room.room_id')->join('reservations', 'reservation_room.reservation_id', '=', 'reservations.id')->whereDate('reservations.checkin', '<', $checkOut)
                    ->whereDate('reservations.checkout', '>', $checkIn);
            });
        });
    }

}
