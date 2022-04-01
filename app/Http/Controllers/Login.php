<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect('dashboard');
        }else{
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
