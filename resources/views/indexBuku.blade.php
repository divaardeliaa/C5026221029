@extends('master2')
@section('judulhalaman','Data Buku')

@section('konten')

<br>
	<h1>Data Buku</h1>

	<a href="/buku/tambah" class="btn btn-primary"> + Tambah Buku Baru</a>

	<br/>
    <br>

    <p>Cari Data Buku :</p>
	<form action="{{ url('/buku/cari') }}" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Buku .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Buku</th>
            <th>Merk Buku</th>
            <th>Stock Buku</th>
            <th>Ketersediaan Buku</th>
            <th>Opsi</th>
		</tr>
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->kodebuku }}</td>
			<td>{{ $b->merkbuku }}</td>
			<td>{{ $b->stockbuku }}</td>
            {{-- <td>{{ $b->tersedia }}</td> --}}
            <td class="text-center">
                <input style=  "width: 25px; height: 28px;" type="checkbox" name="tersedia" {{ $b->tersedia == 'y' ? 'checked' : '' }} disabled>
            </td>
			<td>
				<a href="/buku/view/{{ $b->kodebuku }}" class="btn btn-success">View</a>
                |
                <a href="/buku/edit/{{ $b->kodebuku }}" class="btn btn-warning">Edit</a>
				|
				<a href="/buku/hapus/{{ $b->kodebuku }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{ $pegawai->links() }} --}}

@endsection

