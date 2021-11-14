<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function ReturnMain() {
        return view("pages.mainpage");
    }
}
