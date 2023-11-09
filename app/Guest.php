<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );

    public function reservation(){
        return $this->hasMany('App\Reservation');
    }
}
