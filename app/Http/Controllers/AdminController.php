<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role:admin', ['only' => ['users', 'settings', 'roles']]);
    }

    public function index()
    {
        // Role::create(['name' => 'user']);
        // $role = Role::findById(2);
        // auth()->user()->assignRole($role);
        return view('admin.index');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function roles()
    {
        return view('admin.roles');
    }
}
