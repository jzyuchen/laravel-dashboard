<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    public function users()
    {
        return $this->belongsToMany('User', 'room_users', 'room_id', 'user_id');
    }
}
