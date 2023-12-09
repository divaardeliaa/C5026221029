@extends('master2')
@section('judulhalaman','Data buku')

@section('konten')
    <style>
    input.check {
        width: 30px;
        height: 40px;
    }
    </style>

<br><br>
	<h2>Data buku</h2>

	<a href="/buku"> Kembali</a>

	<br/>
	<br/>


	<form action="/buku/store" method="post" class="form-horizontal">
		{{ csrf_field() }}


        {{-- <div class="form-group row">
            <label for="nama" class="col-1 col-form-label">Nama</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $p->pegawai_nama }}" class="form-control" id="nama" name="nama">
            </div>
        </div> --}}

        <div class="form-group row">
            <label for="merkbuku" class="col-2 col-form-label">Merk Buku</label>
            <div class="col-5">
                <input type="text" required="required" class="form-control" id="merkbuku" name="merkbuku" placeholder = "Masukan nama merk buku ..">
            </div>
        </div>

        <div class="form-group row">
            <label for="stockbuku" class="col-2 col-form-label">Stock Buku</label>
            <div class="col-5">
                <input type="number" required="required" class="form-control" id="stockbuku" name="stockbuku" placeholder = "Masukan Jumlah stock buku ..">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-2 col-form-label">Tersedia</label>
            <div class="col-1">
                <input class="check" type="checkbox" name="tersedia">
            </div>


        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">

	</form>

@endsection

