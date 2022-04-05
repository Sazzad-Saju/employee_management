<?php

namespace App\Http\Controllers;

use App\Models\Notice;
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

        $notices = Notice::select(['message', 'created_at'])->orderBy('created_at','desc')->get();

        return view('employee.dashboard.dashboard',compact('notices'));
    }
}
