<?php

namespace App\Http\Controllers\Admin;

use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{

    public function index()
    {
        $list = Room::paginate(20);
        return view("admin/room/index")->withList($list);
    }

    public function create()
    {
        return view('admin/room/create');
    }

    public function store()
    {
        $model = new Room(Request::all());
        $model->save();

        return \Redirect::action("Admin\\RoomController@index");
    }

    public function edit($id)
    {
        $model = Room::find($id);
        return view('admin/room/edit')->withModel($model);
    }

    public function show($id)
    {
        $model = Room::findOrFail($id);
        return view('admin/room/show')->withModel($model);
    }

    public function delete($id)
    {
        $model = Room::find($id);
        $model->delete();
    }
}
