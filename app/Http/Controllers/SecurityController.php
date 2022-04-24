<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
// tryall
// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
// use App\Http\Middleware\Employee;
// use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\Designation;
use App\Models\Leave;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.auth.verify');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        /* different update applied */

        // $request->authenticate();
        // $request->session()->regenerate();
        // Toastr::success('Verified '.auth('employee')->user()->name);
        // return redirect()->route('employee.auth.update');
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
    public function update(UpdateRequest $request, $id)
    {
        /* update security: change current password */
        $current_pass = $request->input('pass');
        $new_pass = $request->input('new_pass');
        if($current_pass != null){
            if(!Hash::check($current_pass, auth()->user()->password)){
                Toastr::error('Invalid Credential!','Authentication Error');
                return redirect()->back();
            }elseif($new_pass != null){
                $newHashedPass = Hash::make($new_pass);
                Employee::findOrFail($id)->update(['password' => $newHashedPass]);
            }
        }
        /* end update security */

        /* update or unchanged gives successful message */
        Toastr::success('Successfully changed password', "Password Changed");
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
