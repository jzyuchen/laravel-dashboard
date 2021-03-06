<?php

namespace App\Http\Controllers\Admin;

use App\Estate;
use App\Http\Controllers\Controller;
use Request;

class EstateController extends Controller
{
    public function index()
    {
        $list = Estate::paginate(20);
        return view("admin/estate/index")->withList($list);
    }

    public function create()
    {
        return view('admin/estate/create');
    }

    public function store()
    {
        $estate = new Estate(Request::all());
        $estate->save();

        return \Redirect::action("Admin\\EstateController@index");
    }

    public function edit($id)
    {
        $model = Estate::find($id);
        return view('admin/estate/edit')->withModel($model);
    }

    public function show($id)
    {
        $model = Estate::findOrFail($id);
        return view('admin/estate/show')->withModel($model);
    }

    public function delete($id)
    {
        $model = Estate::find($id);
        $model->delete();
    }
}
