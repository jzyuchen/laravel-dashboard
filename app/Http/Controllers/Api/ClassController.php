<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index($class)
    {
//        $className = "App\\". $class;

        return DB::table($class)->orderBy('created_at', 'desc')->get();
    }

    public function show($class, $id)
    {
        return DB::table($class)->where('id', $id)->get();
    }

    public function store(Request $request, $class)
    {
        $className = "App\\" . $class;
        $model = new $className();

        $request->file($model);

        $model->save();

        return $model;
    }

    public function update(Request $request, $class, $id)
    {

    }
}