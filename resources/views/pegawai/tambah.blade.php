
   @extends('layout.bahagia')

   @section('title', 'Menambah Data Pegawai')
   @section('judulhalaman', 'Tambah Data Pegawai')

   @section('konten')
<body>

	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		<label for = "nama">Nama </label> <input type="text" name="nama"
        required="required" class = "form-control"> <br/>
		<label for = "jabatan">Jabatan </label> <input type="text" name="jabatan" required="required" class = "form-control"> <br/>
		<label for = "umur">Umur <input type="number" name="umur" required="required" class = "form-control"> <br/>
		<label for = "alamat">Alamat</label><textarea name="alamat" required="required" class = "form-control"></textarea> <br/>
		<input type="submit" class = "btn btn-success" value="Simpan Data">
        <a href="/pegawai" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>

</body>
@endsection
