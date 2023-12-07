@extends('master2')
@section('judulhalaman','Keranjang Halaman')

@section('konten')
<h1>Latihan EAS</h1>

<br>

<h2>Tambahkan Keranjang Belanja</h2>


	<a href="/keranjang-belanja/tambah" class="btn btn-primary"> + Beli</a>

    <br><br>

	{{-- <br/>
    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/> --}}

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $kb)
		<tr>
			<td>{{ $kb->ID}}</td>
			<td>{{ $kb->KodeBarang}}</td>
			<td>{{ $kb->Jumlah }}</td>
            {{-- harga --}}
            <td>{{ number_format($kb->Harga, 0, ',', '.') }}</td>
            {{-- total --}}
            <td>{{ number_format($kb->Jumlah * $kb->Harga, 0, ',', '.') }}</td>
            {{-- action --}}
			<td>
                {{-- {{ $kb->Harga }} --}}
				<a href="/keranjang-belanja/hapus/{{ $kb->ID }}"class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{ $cart->links() }} --}}

@endsection

