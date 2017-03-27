<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(Request $request, $model)
    {
        return view('admin.class.index')->withModel($model);
    }

    public function getList(Request $request, $model)
    {
        if ($request->ajax()) {
            $list = DB::table($model)->get();

            return response()->json($list);
        } else {

        }
    }

    public function store(Request $request, $model)
    {
        $modelName = 'App\\' . $model;
        $entity = new $modelName(['name' => 'tom']);

        $entity->save();

        return response() > json($entity);
    }
}
