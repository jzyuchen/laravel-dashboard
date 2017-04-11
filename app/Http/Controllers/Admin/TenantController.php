<?php

namespace App\Http\Controllers\Admin;

use App\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantController extends Controller
{
    public function index()
    {
        $list = Tenant::paginate(20);
        return view("admin/tenant/index")->withList($list);
    }

    public function create()
    {
        return view('admin/tenant/create');
    }

    public function store(Request $request)
    {
        $estate = new Tenant($request->all());
        $estate->save();

        return \Redirect::action("Admin\\TenantController@index");
    }

    public function edit($id)
    {
        $model = Tenant::findOrFail($id);
        return view('admin/tenant/edit')->withModel($model);
    }

    public function update(Request $request, $id)
    {
        $model = Tenant::findOrFail($id);
        $model->fill($request->all());

        $model->save();

        return \Redirect::action("Admin\\TenantController@index");
    }

    public function show($id)
    {
        $model = Tenant::with("device")->findOrFail($id);
        return view('admin/tenant/show')->withModel($model);
    }

    public function destroy($id)
    {
        $model = Tenant::find($id);
        $model->delete();
    }
}
