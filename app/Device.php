<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //

    public function rooms(){
        return $this->hasMany('Room', 'device_id', 'id');
    }
}
