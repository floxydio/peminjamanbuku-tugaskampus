<?php

namespace App\Http\Controllers;

use App\Models\Komplain;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use UserPeminjaman;

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
}
