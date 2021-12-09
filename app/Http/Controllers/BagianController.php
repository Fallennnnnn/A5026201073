<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
    public function indexbagian()
    {
        // mengambil data dari table absen
        $bagian = DB::table('bagian')->paginate(5);
        // mengirim data absen ke view indexabsen
        return view('bagian.indexbagian', ['bagian' => $bagian]);
    }
    public function add()
    {
        // mengambil data dari table pegawai
        $bagian = DB::table('bagian')->orderBy('namabagian', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view add
        return view('bagian.add', ['bagian' => $bagian]);
    }
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('bagian')->insert([

            'namabagian' => $request->namabagian,
            'jumlahbagian' => $request->jumlahbagian,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/bagian');
    }
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $bagian = DB::table('bagian')->where('kodebagian', $id)->get();

        // passing data absen yang didapat ke view update.blade.php
        return view('bagian.edit', ['bagian' => $bagian]);
    }
    public function update(Request $request)
    {
        // update data absen
        DB::table('bagian')->where('kodebagian', $request->id)->update([

            'namabagian' => $request->namabagian,
            'jumlahbagian' => $request->jumlahbagian,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/bagian');
    }
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('bagian')->where('kodebagian', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/bagian');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bagian = DB::table('bagian')
		->where('namabagian','like',"%".$cari."%")
        ->orWhere('jumlahbagian','like', "%" . $cari . "%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('bagian.indexbagian',['bagian' => $bagian]);

	}
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bagian = DB::table('bagian')->where('kodebagian', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bagian.detail', ['bagian' => $bagian]);
    }
}
