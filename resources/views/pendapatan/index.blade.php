<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWEB Query Builder</title>
</head>
<body>

	<h2>Tugas Query Builder Pemrograman Web 25 November 2021</h2>
	<h3>Ega Fernanda Putra 5026201073</h3>
    <h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Data Baru</a>

	<br/>
	<br/>

	<table border="1">
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
