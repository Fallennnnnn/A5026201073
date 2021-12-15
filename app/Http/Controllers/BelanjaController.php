<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table absen
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(5);
        // mengirim data absen ke view indexabsen
        return view('keranjangbelanja.indexbelanja', ['belanja' => $keranjangbelanja]);
    }
    public function add()
    {
        // mengambil data dari table pegawai
        $keranjangbelanja= DB::table('keranjangbelanja')->orderBy('kodebarang', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view add
        return view('keranjangbelanja.add', ['belanja' => $keranjangbelanja]);
    }
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('keranjangbelanja')->insert([

            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlahpembelian,
            'Harga' => $request->harga
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/keranjangbelanja');
    }
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/keranjangbelanja');
    }
}
