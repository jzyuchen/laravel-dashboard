<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $list = User::paginate(20);
        return view("admin/users/index")->withList($list);
    }

    public function create()
    {
        return view('admin/users/create')->withErrors(null);
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        $model = new User($request->all());
        $model->save();
        return \Redirect::action("Admin\\UserController@index");
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

    public function destroy($id)
    {
        $model = User::findOrFail($id);
        $model->delete();
    }
}
