<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    
    public function show()
    {
        return view('auth.verify');
    }

 
    public function verify(Request $request)
    {
     
        return back()->with('status', 'تم التحقق من البريد الإلكتروني بنجاح!');
    }
}