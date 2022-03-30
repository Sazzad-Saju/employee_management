<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Employee;
use App\Models\Employee;
use App\Models\Report;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Requests\ReportRequest;

class FirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::where(['created_by'=>auth('employee')->user()->id])->orderBy('created_at','desc')->get();
        return view('employee.fir.index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::select(['id', 'name'])->whereNotIn('id', [auth('employee')->user()->id])->get();
        return view('employee.fir.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $data = $request->only(['level', 'employee_id', 'date', 'description']);
        $data['date'] = date('Y/m/d',strtotime($data['date']));
        $data['created_by'] = auth('employee')->user()->id;
        $Employee = Employee::where('id',$data['employee_id'])->first();
        Report::create($data);
        Toastr::success('You have file a report against '.$Employee->name, "First Information Report");
        return redirect()->route('employee.fir.index');
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
