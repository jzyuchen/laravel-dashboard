<?php

namespace App\Http\Controllers\Admin;

use App\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return view('admin.device.index')->withList(Device::paginate(20));
    }

    public function create()
    {
        return view('admin.device.create');
    }

    public function store(Request $request)
    {
        $model = new Device($request->all());

        $model->save();

        return $request->ajax() ? response()->json($model) : Redirect::action("Admin\\DeviceController@index");
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

        return $request->ajax() ? response()->json($model) : Redirect::action("Admin\\DeviceController@index");
    }

    public function destroy(Request $request, $id)
    {
        $model = Device::findOrFail($id);
        $model->delete();
        return $request->ajax() ? response()->json() : Redirect::action("Admin\\DeviceController@index");
    }
}
