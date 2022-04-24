<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Models\BloodGroup;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
// use Nette\Utils\Image;
use Illuminate\Support\Facades\Hash;
use Image;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        // prefill employee-info-edit with associated data
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
    public function update(InfoRequest $request, $id, FileUploadService $fileUploadService)
    {
        /* Image upload section with img-intervention package */
        if($request->hasFile('profile_image')){
            $profile_image = $request->file('profile_image');
            $filename = 'storage/img/profile_image/'.time().'.'.$profile_image->getClientOriginalExtension();
            Image::make($profile_image)->save($filename);
            Employee::findOrFail($id)->update(['profile_image' => $filename]);
        }

        /* update or rewrite most of the data from employee edit */
        $data = $request->except(['profile_image']);
        Employee::findOrFail($id)->update($data);

        /* update or unchanged gives successful message */
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
