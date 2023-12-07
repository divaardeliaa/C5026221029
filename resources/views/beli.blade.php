@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<h3>Tambah Pembelian</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjang-belanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        {{-- <div class="form-group row">
            <label for="ID" class="col-1 col-form-label">ID</label>
            <div class="col-5">
                <input type="text" class="form-control" id="ID" name="ID">
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="kodeBarang" class="col-1 col-form-label">KodeBarang</label>
            <div class="col-5">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-1 col-form-label">Jumlah</label>
            <div class="col-5">
                <input type="text" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-1 col-form-label">Harga</label>
            <div class="col-5">
                <textarea  class="form-control" id="Harga" name="Harga"> </textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
