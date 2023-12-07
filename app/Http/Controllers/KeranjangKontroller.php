<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangKontroller extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai

        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('index3',['keranjangbelanja' => $keranjangbelanja]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjang-belanja');

	}

    public function hapus($id)
	{
		// menghapus data keranjang berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjang
		return redirect('/keranjang-belanja');

    }

}
