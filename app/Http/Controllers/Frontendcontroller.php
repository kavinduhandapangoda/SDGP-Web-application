<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use DB;
use DateTime;

class Frontendcontroller extends Controller
{
        public function reportView(){

        $request = DB::table('scan_log')->select('scan_log.*')->orderBy("created_at")->get();
        $data = json_decode($request);
        

        foreach($data as $row){
            $date = new \DateTime($row->created_at);
            $month_no = $date->format( 'm' );
            $dateObj   = DateTime::createFromFormat('!m', $month_no);
            $monthName = $dateObj->format('F'); // March
			$month_array[ $month_no ] = $monthName;
        }

        return view('reportView',['data'=>$month_array]);
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

        $requestSolutionData = DB::table('disease')->select('disease.*')->get();
        $solutionData = json_decode($requestSolutionData);
        foreach($solutionData as $disease){
            $solution_array[ $disease->name ] = $disease->solution;
        }

        return view('mapView',['data'=>$request,"solutionList"=>$solution_array]);
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

        $requestSolutionData = DB::table('disease')->select('disease.*')->get();
        $solutionData = json_decode($requestSolutionData);
        foreach($solutionData as $disease){
            $solution_array[ $disease->name ] = $disease->solution;
        }

        return view('mapView',['data'=>$request, "solutionList"=>$solution_array]);
    }


    public function reportViewSelected($month){
        $data = [];

        $requestSolutionData = DB::table('disease')->select('disease.*')->get();
        $request = DB::table('scan_log')->select('scan_log.*')->where('created_at','LIKE', '%'.$month.'%')->get();
        $requestScan = DB::table('scan')->select('scan.*')->where('created_at','LIKE', '%'.$month.'%')->get();
        $requestName = DB::table('scan_log')->select('scan_log.disease')->where('created_at','LIKE', '%'.$month.'%')->distinct()->get();

        $log_list = json_decode($request);
        $scan_list = json_decode($requestScan);
        $diseaseData = json_decode($requestName);
        $solutionData = json_decode($requestSolutionData);

        $count = 0;
        $treeCount = 0;

        foreach($solutionData as $disease){
            $solution_array[ $disease->name ] = $disease->solution;
        }

       // return $solution_array;
    

        foreach($scan_list as $scan){
            $count = $count + 1;
            $treeCount = $treeCount + $scan->trees;
        }
        array_push($data, $count);
        array_push($data, $treeCount);

        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F'); 

        return view('reportViewSelected',['data'=>$request,'dataArray'=>$data],["month"=>$monthName, "disease"=>$diseaseData[0]->disease, "solutionList"=>$solution_array]);
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
