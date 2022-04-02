<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use DB;

class Frontendcontroller extends Controller
{

    public function indexUI01(){
        {
            $scanlogs = ui_scan_logs_view::all();
            return view('UI_Scan_Map_view', compact('student'));
        }
        // return view('UI_Scan_Map_view');
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
        
        $request = DB::table('scan_log')->select('scan_log.*')->get();
        $log_list = json_decode($request);
        $count = 0;
        foreach($log_list as $log){
            $locationList = explode(",",$log->location);
            if($count == 0){
                Mapper::map($locationList[0], $locationList[1]); 
            }else{
                Mapper::marker($locationList[0], $locationList[1], ['animation' => 'DROP']);
            }
            $count = $count + 1;
        }
        return view('mapView',['data'=>$request]);
    }

    public function tableView(){
        return view('tableView');
    }
}
