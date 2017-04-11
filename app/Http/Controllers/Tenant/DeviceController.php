<?php

namespace App\Http\Controllers\Tenant;

use App\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

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

    public function store(Request $request)
    {
        $model = new Device($request->all());

        $model->save();

        return $request->ajax() ? response()->json($model) : Redirect::action("Tenant\\DeviceController@index");
    }

    public function edit($id)
    {
        $model = Device::findOrFail($id);
        return view('tenant.device.edit')->withModel($model);
    }

    public function update(Request $request, $id)
    {
        $model = Device::findOrFail($id);

        $model->fill($request->all());

        $model->save();

        return $request->ajax() ? response()->json($model) : Redirect::action("Tenant\\DeviceController@index");
    }

    public function destroy(Request $request, $id)
    {
        $model = Device::findOrFail($id);
        $model->delete();
        return $request->ajax() ? response()->json() : Redirect::action("Tenant\\DeviceController@index");
    }
}
