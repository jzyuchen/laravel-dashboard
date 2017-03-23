<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $fillable = ['name', 'address', 'telephone', 'contact_person'];
    //
}
