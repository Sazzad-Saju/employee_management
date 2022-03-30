<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttendanceRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Attendance;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::where(['employee_id' => auth('employee')->user()->id])->orderBy('created_at', 'desc')->get();
        // reverse order of attendance
        return view('employee.attendance.index',compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now();
        return view('employee.attendance.create', compact('date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttendanceRequest $request)
    {
        // return $request->all();
        $data['employee_id'] = auth('employee')->user()->id;
        $data['date'] = Carbon::now()->format('Y/m/d');
        $data['start_time'] = Carbon::now()->format('H:i:s');
        $time = strtotime($request->end_time);
        $data['end_time'] = date('H:i:s', $time);



        Attendance::create($data);
        Toastr::success('Successfully inserted attendance', "Daily Attendance");
        return redirect()->route('employee.attendance.index');
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
