<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function indexUI01(){
        return view('UI_Scan_Logs_view');
    }

    public function indexUI02(){
        return view('UI_Disease_Spread_view');
    }

    public function indexUI03(){
        return view('UI_Scan_Map_view');
    }

    public function indexUI04(){
        return view('UI_Home');
    }

    public function indexUI05(){
        return view('UI_Login');
    }
}
