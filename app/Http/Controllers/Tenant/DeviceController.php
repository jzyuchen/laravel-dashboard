<?php

namespace App\Http\Controllers\Tenant;

use App\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return view('tenant.device.index')->withList(Device::paginate(20));
    }

    public function create()
    {
        return view('tenant.device.create');
    }
}
