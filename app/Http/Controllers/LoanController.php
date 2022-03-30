<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::where(['employee_id'=> auth('employee')->user()->id ])->orderBy('created_at', 'desc')->get();
        return view('employee.loan.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.loan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoanRequest $request)
    {
        // return $request->all();
        // return $request->amount;
        // $newLoan = new Loan;
        // $newLoan->employee_id = auth('employee')->user()->id;
        // $newLoan->issue_date = Carbon::now();
        // $newLoan->amount = $request->amount;
        // $newLoan->reason = $request->reason;
        // $newLoan->save();
        $loan = Loan::create([
            'employee_id'=>auth('employee')->user()->id,
            'issue_date'=> Carbon::now(),
            'amount' => $request->amount,
            'reason' => $request->reason,
        ]);
        Toastr::success('Successfully applied for a loan', "Loan Request");
        return redirect()->route('employee.loan.index');
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
