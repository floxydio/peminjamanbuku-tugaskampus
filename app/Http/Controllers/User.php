<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    //
    public function index()
    {
        $book =  DB::table('book')->get();
        $count = DB::table('book')->count();
        return view('dashboard/dashboard', compact('book'));

    }
}
