<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pendapatan = DB::table('pendapatan')->get(); //hasil get() adalah array of object

        // mengirim data pegawai ke view index
        return view('pendapatan.index', ['pendapatan' => $pendapatan]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('pendapatan.tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->idpegawai,
            'Bulan' => $request->bulan,
            'Tahun' => $request->tahun,
            'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pendapatan.edit', ['pendapatan' => $pendapatan]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pendapatan')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Bulan' => $request->bulan,
            'Tahun' => $request->tahun,
            'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pendapatan')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
}
