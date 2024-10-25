<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Signupemail;
use Illuminate\Http\Request;

class SignupemailController extends Controller
{   
   public function index(Request $request)
   {
    $request->validate([
       'email'=>'required|email|unique:signupemails,emailid', 
    ]);
    $data = new Signupemail();
    $data->emailid = $request->email;
    $data->save();
    return back()->with('success',"Thank you for you subscription, You will receive the latest updates from us.");
   }
}
