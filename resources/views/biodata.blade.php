<!DOCTYPE html>
<html>
<head>
	<title>Passing Data Controller Ke View Laravel</title>
</head>
<body>

	<h1>Biodata Diva</h1>

    <p>Nama : {{ $nama }}</p>

	<p>Mata Kuliah</p>
	<ul>

		@foreach($matkul as $m)

		<li>{{ $m }}</li>

		@endforeach

	</ul>
</body>
</html>
