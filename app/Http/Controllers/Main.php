<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function ReturnMain() {
        $ankieties_count = DB::table('ankieties')->count('id');
        $users_count = DB::table('users')->count('id');
        return view("pages.mainpage", compact('users_count', 'ankieties_count', 'users_count'));
    }
    
}
