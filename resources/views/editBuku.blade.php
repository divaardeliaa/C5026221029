@extends('master2')
@section('judulhalaman','Data Buku')

@section('konten')
    <style>
    input.check {
        width: 30px;
        height: 40px;
    }
    </style>
<br><br>
	<h2>Edit Buku</h2>

	<a href="/buku"> Kembali</a>

	<br/>
	<br/>

	@foreach($buku as $b)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodebuku" value="{{ $b->kodebuku }}"> <br/>

        {{-- <div class="form-group row">
            <label for="nama" class="col-1 col-form-label">Nama</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $p->pegawai_nama }}" class="form-control" id="nama" name="nama">
            </div>
        </div> --}}

        <div class="form-group row">
            <label for="merkbuku" class="col-2 col-form-label">Merk Buku</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $b->merkbuku }}" class="form-control" id="merkbuku" name="merkbuku" >
            </div>
        </div>

        <div class="form-group row">
            <label for="stockbuku" class="col-2 col-form-label">Stock Buku</label>
            <div class="col-5">
                <input type="number" required="required" value="{{ $b->stockbuku }}" class="form-control" id="stockbuku" name="stockbuku" >
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-2 col-form-label">Tersedia</label>
            <div class="col-1">
                <input class="check"  type="checkbox" name="tersedia" value='y' {{ $b->tersedia == 'y' ? 'checked' : '' }}>
            </div>

        </div>



		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
