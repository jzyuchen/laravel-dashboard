<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $list = Admin::paginate(20);
        return view("admin/admin/index")->withList($list);
    }

    public function create()
    {
        return view('admin/admin/create');
    }

    public function edit($id)
    {
        $model = Admin::find($id);
        return view('admin/admin/edit')->withModel($model);
    }

    public function show($id)
    {
        $model = Admin::findOrFail($id);
        return view('admin/admin/show')->withModel($model);
    }

    public function delete($id)
    {
        $model = Admin::find($id);
        $model->delete();
    }
}
