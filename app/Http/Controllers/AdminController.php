<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role:admin', ['only' => ['users', 'settings', 'roles', 'permissions']]);
    }

    public function index()
    {
        // Role::create(['name' => 'admin']);
        // $role = Role::findById(1);
        // auth()->user()->assignRole($role);
        return view('admin.index');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function roles()
    {
        $roles = Role::all();
        return view('admin.roles', compact('roles'));
    }

    public function permissions()
    {
        return view('admin.permissions');
    }
}
