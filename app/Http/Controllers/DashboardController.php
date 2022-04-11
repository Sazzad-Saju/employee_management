<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Employee;
use App\Models\Employee;
use App\Models\Notice;
use App\Notifications\LatestNotice;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request){
        // foreach(auth('employee')->user()->notifications as $notification){
        //     print_r($notification);
        // }
        // return auth('employee')->user()->notifications[0]['created_at']->format('d/m/Y');
        // return substr($data,0,25);

        // Toastr::success('Post added successfully :)','Success');
        // return Carbon::now()->timezone;
        // return Carbon::now()->format('Y-m-d H:i:s');
        // return Carbon::now('Asia/Dhaka')->format('H:i:s');
        // dd($request->all());
        $search = $request['query'] ?? "";
        if($search != ""){
            $notices = Notice::where('message', 'LIKE', "%{$search}%")->paginate(3);
        }else{
            $notices = Notice::select(['message', 'created_at'])->orderBy('created_at','desc')->paginate(3);
        }

        //notification...
        // Employee::find(Auth('employee')->user()->id)->notify(new LatestNotice);
        return view('employee.dashboard.dashboard',compact('notices'));
    }
}
