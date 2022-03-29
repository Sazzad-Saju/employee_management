<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        // Toastr::success('Post added successfully :)','Success');
        // return Carbon::now()->timezone;
        // return Carbon::now()->format('Y-m-d H:i:s');
        // return Carbon::now('Asia/Dhaka')->format('H:i:s');



        return view('employee.dashboard.dashboard');
    }
}
