<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class UserController extends Controller
{
    public function user(){
        $users = User::all();
        /*$user = User::find(2);
        $user->roles()->attach(1);
        $user = User::find(2);
        $user->roles()->attach(2);*/
        foreach ($users as $user) {
            $posts = $user->posts;
        }
        foreach ($users as $user) {
            $roles = $user->roles;
        }
        return view('users', compact('users', 'posts', 'roles'));
    }
}
