<?php

namespace App\Http\Controllers\Api;

use App\Device;
use App\Http\Controllers\Controller;

class DeviceController extends Controller
{
    public function show($id)
    {
        return Device::findOrFail($id);
    }
}
