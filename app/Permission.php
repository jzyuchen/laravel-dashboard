<?php

namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public static $rules = array('name' => 'required|between:4,255');
}
