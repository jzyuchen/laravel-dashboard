<?php

namespace App\Http\Controllers\Tenant;

use App\Room;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        return Room::all();
    }
}
