<?php

namespace App\Http\Controllers\Patient\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;

class PatientLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:patient')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.patient-login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'phone' => 'required',
            'password' => 'required'
        ]);

    
        // Attempt to log the user in
        if(Auth::guard('patient')->attempt(['phone' => $request->phone, 'password' => $request->password], $request->remember))
        {
            
            return redirect()->intended(route('patient.dashboard'));
        } 

        // if unsuccessful
        return redirect()->back()->withInput($request->only('phone','remember'));
    }

    public function logout()
    {
        Auth::guard('patient')->logout();
        return redirect('/patient/login');
    }
}
