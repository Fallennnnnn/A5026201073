@extends('layout.bahagia')

@section('title', 'Mengedit Data Pendapatan Pegawai')
@section('judulhalaman', 'Edit Data Pendapatan Pegawai')

@section('konten')
<body>


	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <label for ="idpegawai">IDPegawai</label> <input type="number" required="required" name="idpegawai" value="{{ $p->IDPegawai }}" class = "form-control"> <br/>
		<label for = "bulan">Bulan <input type="number" required="required" name="bulan" value="{{ $p->Bulan }}" class = "form-control"> <br/>
		<label for = "tahun">Tahun <input type="number" required="required" name="tahun" value="{{ $p->Tahun }}" class = "form-control"> <br/>
        <label for = "gaji">Gaji <input type="number" required="required" name="gaji" value="{{ $p->Gaji }}" class = "form-control"> <br/>
        <label for = "tunjangan">Tunjangan <input type="number" required="required" name="tunjangan" value="{{ $p->Tunjangan }}" class = "form-control"> <br/>

		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/pendapatan" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>
	@endforeach


</body>
@endsection
