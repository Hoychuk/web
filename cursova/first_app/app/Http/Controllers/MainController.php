<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users = User::all();
        $reversedUsers = $users->reverse();
        return view('comments', compact('reversedUsers'));
    }
    public function add_comment(Request $request){
        $request->validate([
            'name'=>'required',
            'comment'=>'required'
        ]);

        $query = DB::table('users')->insert([
            'name'=>$request->input('name'),
            'comment'=>$request->input('comment'),
        ]);
        if ($query) {
            return redirect('comments');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
