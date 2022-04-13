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
        /* From header a search 'query' gets requested, gets query as search else empty string
        matches 'search' inside 'message' column of notice and gets the result in notices*/
        $search = $request['query'] ?? "";
        if($search != ""){
            $notices = Notice::where('message', 'LIKE', "%{$search}%")->paginate(3);
        }else{
            $notices = Notice::select(['message', 'created_at'])->orderBy('created_at','desc')->paginate(3);
        }
        return view('employee.dashboard.dashboard',compact('notices'));
    }

}
