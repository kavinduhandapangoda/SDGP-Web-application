<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

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

    public function map()
    {
        Mapper::map(6.708093793834191, 80.04245852869457); 
        Mapper::marker(6.707762645738229, 80.04189149920458, ['animation' => 'DROP']);
        Mapper::marker(6.707787285967595, 80.04218245351844, ['animation' => 'DROP']);
        Mapper::marker(6.707343761652206, 80.04185315638787, ['animation' => 'DROP']);
        return view('UI_Scan_Map_view');
    }
}
