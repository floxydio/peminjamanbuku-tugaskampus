<?php

namespace App\Http\Controllers;

use App\Exports\PeminjamanExport;
use App\Models\Komplain;
use App\Models\Peminjaman;
use Maatwebsite\Excel\Facades\Excel;

class Buku extends Controller
{
    public function komplain() {
      return view("dashboard/komplain");
    }

    public function sendKomplain() {
      $nama = request("nama");
      $komentar = request("komentar");

      $komplain = new Komplain;
      $komplain->nama = $nama;
      $komplain->komentar = $komentar;
      // dd($komplain);
      $komplain->save();

      return redirect("/komplain");
    }

    public function sendPinjam() {
      $nama = request("nama");
      $namaBuku = request("nama_buku");
      $tanggal = request("tanggal");

      $pinjam = new Peminjaman;
      $pinjam->nama = $nama;
      $pinjam->namabuku = $namaBuku;
      $pinjam->tanggal = $tanggal;
      $pinjam->save();
      return redirect("/dashboard");
    }
    public function deletePinjam($id) {
      dd($id);
      $pinjam = Peminjaman::find($id);
      $pinjam->delete();
      return redirect("/dashboard-admin");
    }
    public function export()
    {
        return Excel::download(new PeminjamanExport, 'peminjaman.xlsx');
    }
}
