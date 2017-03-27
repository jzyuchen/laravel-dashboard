<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index')->withList(Role::all());
    }

    public function store()
    {
        return view('admin.role.create');
    }

    public function update()
    {

    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return response()->json(['success' => 0, 'message' => null, 'data' => null]);
    }
}
