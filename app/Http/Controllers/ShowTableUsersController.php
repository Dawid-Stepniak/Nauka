<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowTableUsersController extends Controller
{
    public function show(){
        return DB::table('users')
        ->where('firstName','Janusz')
        ->get();
    }
    public function index(){
        $users = DB::select('select * from users where firstName = ?', ['Janusz']);
        return view('user.showusers',['users'=>$users]);
    }
}
