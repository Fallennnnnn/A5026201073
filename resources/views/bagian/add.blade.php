
   @extends('layout.bahagia')

   @section('title', 'Menambah Data Bagian')
   @section('judulhalaman', 'Tambah Data Bagian')

   @section('konten')
<body>

	<br/>

	<form action="/bagian/store" method="post">

		{{ csrf_field() }}
        <div class="form-group">
		<label for = "namabagian">Nama Bagian </label> <input type="text" name="namabagian"required="required" class = "form-control" autocomplete="off"> <br/>

		<label for = "jumlah bagian">Jumlah Bagian </label> <input type="number" name="jumlahbagian" required="required" pattern= "[0-9]{11}" class = "form-control"> <br/>

		<label for = "Tersedia">Tersedia <select id = "tersedia" class = "form-control" name = "tersedia">
            <option value = "Y">Y</option>
            <option value = "T">T</option>
        </select>
        <br><br>
		<input type="submit" class = "btn btn-success" value="Simpan Data">
        <a href="/bagian" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>

</body>
@endsection
