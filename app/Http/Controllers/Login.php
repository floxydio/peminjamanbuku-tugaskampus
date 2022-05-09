<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if(Auth::user()->role == "admin") {
              return redirect("dashboard-admin");
            } else {
                return redirect("dashboard");
            }
        }else{
            return view('auth/login');
            
        }
    }
    public function save(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        // dd($data);
        if (Auth::Attempt($data)) {
            Session::flash('sukses','Berhasil Login');
            if(Auth::user()->role == "admin") {
                return redirect("dashboard-admin");
            } else {
                return redirect("dashboard");
            }
        }else{
            return redirect('/');
        }
    }
    public function logout()
    {
        Session::flash('logout','Berhasil Logout');
        Auth::logout();
        return redirect('/login');
    }
}
