
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')
<body>


	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<label for ="nama">Nama </label> <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class = "form-control"> <br/>
		<label for ="jabatan">Jabatan </label> <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class = "form-control"> <br/>
		<label for ="umur">Umur </label> <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class = "form-control"> <br/>
		<label for = "alamat">Alamat</label><textarea name="alamat" required="required" class = "form-control">{{ $p->pegawai_alamat }} </textarea> <br/>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/pegawai" class = "btn btn-primary" > Kembali</a>
    </div>
	</form>
	@endforeach


</body>
@endsection
