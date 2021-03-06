<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;

class PermissionController extends Controller
{

    public function index()
    {
        $list = Permission::paginate(20);
        return view("admin/admin/index")->withList($list);
    }

    public function create()
    {
        return view('admin/admin/create');
    }

    public function edit($id)
    {
        $model = Permission::find($id);
        return view('admin/admin/edit')->withModel($model);
    }

    public function show($id)
    {
        $model = Permission::findOrFail($id);
        return view('admin/admin/show')->withModel($model);
    }

    public function delete($id)
    {
        $model = Permission::find($id);
        $model->delete();
    }
}
