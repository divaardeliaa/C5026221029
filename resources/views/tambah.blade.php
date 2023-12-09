@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')


	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-1 col-form-label">Nama</label>
            <div class="col-5">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-1 col-form-label">Jabatan</label>
            <div class="col-5">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-1 col-form-label">Umur</label>
            <div class="col-5">
                <input type="text" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-1 col-form-label">Alamat</label>
            <div class="col-5">
                <textarea  class="form-control" id="alamat" name="alamat"> </textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
