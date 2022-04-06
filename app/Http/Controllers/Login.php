<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
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
            return redirect('dashboard');
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
