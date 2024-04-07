<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function Login(Request $request){

       
        return view('auth.login');
    }

    public function forgot(){
        return view('auth.forgot');
    }

    public function login_post(Request $request){ 
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
            if (Auth::User()->is_role == '1') {
            return redirect()->intended('admin/dashboard');
            } else {
             return redirect()->back()->with('error', 'Please Enter the correct credentials');
            }

        }else{
            return redirect()->back()->with('error', 'Please Enter the correct credentials');
        }
    }

    public function logout(){
        Auth::logout();
            return redirect(url('/'));
    }


}
