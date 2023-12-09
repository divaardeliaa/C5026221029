<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    public function index()
	{
    	// mengambil data dari table buku
		// $buku = DB::table('buku')->get();
        $buku = DB::table('buku')->get();

    	// mengirim data buku ke view index
		return view('indexBuku',['buku' => $buku]);

	}

	// method untuk menampilkan view form tambah buku
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahBuku');

	}

	// method untuk insert data ke table buku
	public function store(Request $request)
	{
		// insert data ke table buku
		DB::table('buku')->insert([
			'kodebuku' => $request->kodebuku,
			'merkbuku' => $request->merkbuku,
			'stockbuku' => $request->stockbuku,
			'tersedia' => $request->has('tersedia') ? 'y' : 'n'
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/buku');

	}

	// method untuk edit data pegawai
	public function edit($kodebuku)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$buku = DB::table('buku')->where('kodebuku',$kodebuku)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editBuku',['buku' => $buku]);

	}

	// update data buku
	public function update(Request $request)
	{
		// update data buku
		DB::table('buku')->where('kodebuku', $request->kodebuku)->update([
			'kodebuku' => $request->kodebuku,
			'merkbuku' => $request->merkbuku,
			'stockbuku' => $request->stockbuku,
			'tersedia' => $request->has('tersedia') ? 'y' : 'n'
		]);
		// alihkan halaman ke halaman buku
		return redirect('/buku');
	}

	// method untuk hapus data buku
	public function hapus($kodebuku)
	{
		// menghapus data buku berdasarkan kodebuku yang dipilih
		DB::table('buku')->where('kodebuku',$kodebuku)->delete();

		// alihkan halaman ke halaman buku
		return redirect('/buku');

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;


        $buku = DB::table('buku')
        ->where('kodebuku', 'like', '%' . $cari . '%')
        ->orWhere('merkbuku', 'like', '%' . $cari . '%')
        ->orWhere('stockbuku', 'like', '%' . $cari . '%')
        ->get();

    		// mengirim data buku ke view index
		return view('indexBuku',['buku' => $buku, 'cari' => $cari]);

	}

    public function lihat($kodebuku)
	{
		// mengambil data buku berdasarkan kodebuku yang dipilih
		$buku = DB::table('buku')->where('kodebuku',$kodebuku)->get();
		// passing data buku yang didapat ke view edit.blade.php
		return view('lihatBuku',['buku' => $buku]);

	}

}
