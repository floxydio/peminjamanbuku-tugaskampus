<?php

namespace App\Http\Controllers;

use App\Exports\HistoryPeminjamExport;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class User extends Controller
{
    //
    public function index()
    {
        $book =  DB::table('book')->get();
        $count = DB::table('book')->count();
        return view('dashboard/dashboard', compact('book'));
    }
    public function indexAdmin()
    {
        $sss =  DB::table('book')->get();
        $count = DB::table('book')->count();
        $historyUser = DB::table("user_peminjaman")->get();
        return view('dashboard/dashboard-admin', compact('sss', 'count', 'historyUser'));
    }

    public function changeStatusUser($id) {
        // dd($id);
        DB::table("user_peminjaman")->where("id", $id)->update(["status" => 1]);
        return redirect("/dashboard-admin");
    }
    public function changeStatusUserDisable($id) {
        // dd($id);
        DB::table("user_peminjaman")->where("id", $id)->update(["status" => 2]);
        return redirect("/dashboard-admin");
    }

}
