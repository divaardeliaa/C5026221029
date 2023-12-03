@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group row">
            <label for="nama" class="col-1 col-form-label">Nama</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $p->pegawai_nama }}" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-1 col-form-label">Jabatan</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $p->pegawai_jabatan }}" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-1 col-form-label">Umur</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $p->pegawai_umur }}" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-1 col-form-label">Alamat</label>
            <div class="col-5">
                <textarea class="form-control" id="alamat" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
