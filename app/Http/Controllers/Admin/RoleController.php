<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $roles = Role::all();

        return view('admin.pages.role.list', compact('roles'));
    }
}
