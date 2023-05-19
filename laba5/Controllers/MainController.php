<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function container(){
        return view('container');
    }
    public function sinevyr(){
        return view('sinevyr');
    }
    public function shypit(){
        return view('shypit');
    }
    public function skies(){
        return view('skies');
    }
    public function skansen(){
        return view('skansen');
    }
    public function comments(){
        return view('comments');
    }
    public function laba_get(){
        return view('laba_get');
    }
    public function laba_post(){
        return view('laba_post');
    }
    public function store(){

        error_log(request('first'));

        return redirect('/laba_post');
    }
    public function users()
    {
        $users = [
            ['name' => 'Sasha', 'email' => 'sasha@example.com'],
            ['name' => 'Taras', 'email' => 'taras@example.com'],
            ['name' => 'Peter', 'email' => 'peter@example.com']
        ];

        return view('users', ['users' => $users]);
    }
}
