<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillRequest;
use App\Models\BillType;
use App\Models\ConveyanceBill;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* gets all bills of the authenticated employee */
        $bills = ConveyanceBill::where(['employee_id'=> auth('employee')->user()->id])->orderBy('created_at','desc')->paginate(3);
        return view('employee.bill.index',compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $billTypes = BillType::select(['id','name'])->get();
        // return $billTypes;
        return view('employee.bill.create', compact('billTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillRequest $request)
    {
        $data = $request->except('_token');
        $data += [
            'employee_id' => auth('employee')->user()->id,
            'created_by' => auth('employee')->user()->id,
            'date' => Carbon::now()->format('Y-m-d'),
            'is_approved' => 0,
        ];
        ConveyanceBill::create($data);
        Toastr::success('Successfully applied for a bill', "Bill Request");
        return redirect()->route('employee.bill.index');
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
        ConveyanceBill::destroy($id);
        Toastr::warning('Deleted pending bill', "Bill Delete");
        return redirect()->back();
    }
}
