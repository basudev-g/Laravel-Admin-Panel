<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $role = new Role();
        $role->create($request->all());
        return redirect()->route('admin-roles')->with('success', " Role created successfully! ");
    }

    public function destroy($id)
    {
        Role::findById($id)->delete();
        return redirect()->back()->with('success', 'Role successfully deleted!');
    }
}
