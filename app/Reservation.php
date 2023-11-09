<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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

    public function guest(){
        return $this->belongsTo('App\Guest');
    }

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'reservation_details');
    }
}
