<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'capacity' => 'required'
    );

    public function room(){
        return $this->hasMany('App\Room');
    }
}
