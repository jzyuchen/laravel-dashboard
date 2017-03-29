<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function index()
    {
        return view('admin.file.index');
    }
}
