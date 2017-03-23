<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $list = User::paginate(20);
        return view("admin/users/index")->withList($list);
    }

    public function create()
    {
        return view('admin/users/create');
    }

    public function edit($id)
    {
        $model = User::find($id);
        return view('admin/users/edit')->withModel($model);
    }

    public function show($id)
    {
        $model = User::findOrFail($id);
        return view('admin/users/show')->withModel($model);
    }

    public function delete($id)
    {
        $model = User::find($id);
        $model->delete();
    }
}
