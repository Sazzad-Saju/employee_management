<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Employee;

use App\Http\Requests\LeaveRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Leave;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        // $leaves = Leave::all();  //all leave
        // $leaves = Leave::with('employee')->get(); all leave with employee info
        gets all leaves where authenticated employee id matches with employee_id column of leave
        */
        $leaves = Leave::where(['employee_id' => auth('employee')->user()->id])->orderBy('created_at', 'desc')->paginate(3);
        return view('employee.leave.index',compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* send all employee's id,name info */
        $employees = Employee::select(['id', 'name'])->get();
        return view('employee.leave.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveRequest $request)
    {
        /* gets working duration in terms of hours. Here 9-hour/day */
        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);
        $working_duration = ($end_date->diffInDays($start_date)+1)*9;

        /* organize data to store: format date, calculate duration, gets employee_id, status set to pending */
        $data = $request->only(['leave_type_id', 'recommend_employee_id',  'reason',  'submission_type']);
        $data['employee_id'] = auth('employee')->user()->id;
        $data['start_date'] = $start_date->format('Y/m/d');
        $data['end_date'] = $end_date->format('Y/m/d');
        $data['status'] = 'Pending';
        $data['duration'] = $working_duration;
        $leave = Leave::create($data);

        Toastr::success('Successfully applied for a leave', "Leave Request");
        return redirect()->route('employee.leave.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
