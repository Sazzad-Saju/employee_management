<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
    public function index(){
        // Toastr::success('Post added successfully :)','Success');
        return view('employee.dashboard.dashboard');
    }
}
