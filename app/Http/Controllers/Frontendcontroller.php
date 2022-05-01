<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use DB;

class Frontendcontroller extends Controller
{
    
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
        date_default_timezone_set("Asia/Colombo");
        $date = date('Y-m-d');

        $request = DB::table('scan_log')->select('scan_log.*')->where('created_at','LIKE', '%'.$date.'%')->get();
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

        $request = DB::table('scan')->select('scan.*')->get();
        return view('tableView',['rows'=>$request]);

    }

    public function tableViewSelected($date){

        $request = DB::table('scan_log')->select('scan_log.*')->where('created_at','LIKE', '%'.$date.'%')->get();

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

    public function reportLog($location,$disease){

        date_default_timezone_set("Asia/Colombo");
        $date = date('Y-m-d');

        $request = DB::table('scan')->select('scan.*')->where('created_at','LIKE', '%'.$date.'%')->count();

        if($request == 0){

            $request = DB::table('scan')->insert(
                ['trees'=> "0" , 'created_at'=>$date]
            );

        }else{
            DB::table('scan')->where('created_at', $date)->increment('trees', 1);
        }

        $request = DB::table('scan_log')->insert(
            ['location'=>$location, 'disease' =>$disease, 'farm' => 'farm1', 'created_at'=>$date]
        );

        return $request;
        
    }
}
