@extends('layout.bahagia')

@section('title', 'Data Pendapatan Pegawai')
@section('judulhalaman', 'Data Pendapatan Pegawai')

@section('konten')
<body>

	<a href="/pendapatan/tambah" class = "btn btn-primary"> Tambah Data Baru</a>

	<br/>
	<br/>

	<table border="2" class = "table table-hover">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->ID}}</td>
			<td>{{ $p->IDPegawai}}</td>
			<td>{{ $p->Bulan}}</td>
			<td>{{ $p->Tahun}}</td>
            <td>{{ $p->Gaji}}</td>
            <td>{{ $p->Tunjangan}}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
@endsection
