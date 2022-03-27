<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Http\Middleware\Employee;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\Designation;
use App\Models\Leave;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('employee.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // dd('asdfg');
        // return $request->all(); password showing prob
        $request->authenticate();

        $request->session()->regenerate();
        Toastr::success('Welcome '.auth('employee')->user()->name, "Log in");
        // return redirect()->intended(RouteServiceProvider::HOME);
        // get related table data
        //$employees = Employee::with('designation')->get();
        // $designations = Designation::all();
        // return auth('employee')->user()->designation->id;
        return redirect()->route('employee.dashboard.index');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Toastr::warning("You have log out", "Log out");
        return redirect('/');
    }
}
