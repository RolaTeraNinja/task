<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class DoctorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:doctor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.doctor-login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'phone' => 'required',
            'password' => 'required'
        ]);

    
        // Attempt to log the user in
        if(Auth::guard('doctor')->attempt(['phone' => $request->phone, 'password' => $request->password], $request->remember))
        {
            
            return redirect()->intended(route('doctor.dashboard'));
        } 

        // if unsuccessful
        return redirect()->back()->withInput($request->only('phone','remember'));
    }

    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect('/doctor/login');
    }

}
