<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
class RoleController extends Controller
{
    public function role(){
        $roles = Role::all();
        foreach ($roles as $role) {
            $users = $role->users;
        }
        return view('role', compact('roles','users'));
    }
}
