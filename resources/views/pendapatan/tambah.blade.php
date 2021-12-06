@extends('layout.bahagia')

@section('title', 'Menambah Data Pendapatan Pegawai')
@section('judulhalaman', 'Tambah Data Pendapatan Pegawai')

@section('konten')
<body>


	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		<label for ="idpegawai">ID Pegawai <input type="number" name="idpegawai" required="required" class = "form-control"> <br/>
		<label for = "bulan">Bulan<input type="number" name="bulan" required="required" class = "form-control"> <br/>
        <label for = "tahun">Tahun<input type="number" name="tahun" required="required" class = "form-control"> <br/>
        <label for = "gaji">Gaji<input type="number" name="gaji" required="required" class = "form-control"> <br/>
        <label for = "tunjangan">Tunjangan<input type="number" name="tunjangan" required="required" class = "form-control"> <br/>

		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/pendapatan" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>


</body>
@endsection
