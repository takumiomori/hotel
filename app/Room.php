<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'room_category_id' => 'required',
        'name' => 'required',
        'number' => 'required'
    );

    public function room_category(){
        return $this->belongsTo('App\RoomCategory');
    }

    public function reservations(): BelongsToMany
    {
        return $this->belongsToMany(Reservation::class, 'reservation_details');
    }
}
