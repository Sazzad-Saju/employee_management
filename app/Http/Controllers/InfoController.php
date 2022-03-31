<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'ok';
        return view('employee.info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $employee = Employee::findOrFail(auth('employee')->user()->id);
        $bloodGroups = BloodGroup::select(['id', 'name'])->get();
        $departments = Department::select(['id', 'name'])->get();
        $designations = Designation::select(['id', 'name'])->get();

        return view('employee.info.edit',compact('employee','bloodGroups','departments','designations'));
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
        // return $request->all();
        DB::table('employees')->where('id',$id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'personal_email'=> $request->personal_email,
            'office_email' => $request->office_email,
            'office_phone' => $request->office_phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'blood_group_id' => $request->blood_group_id,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'department_id' => $request->department_id,
            'salary' => $request->salary,
            'join_date' => $request->join_date,
            'quit_date' => $request->quit_date,
            'nid_number' => $request->nid_number,
            'emergency_contact_person' => $request->emergency_contact_person,
            'emergency_contact_relation' => $request->emergency_contact_relation,
            'emergency_contact_address' => $request->emergency_contact_address,
        ]);

        Toastr::success('Successfully updated profile', "Profile Update");
        return redirect()->route('employee.info.index');

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
