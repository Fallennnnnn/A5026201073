
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Bagian')
   @section('judulhalaman', 'Edit Data Bagian')

   @section('konten')
<body>


	@foreach($bagian as $b)
	<form action="/bagian/update" method="post">
		{{ csrf_field() }}

        <div class="form-group">

		<input type="hidden" name="id" value="{{ $b->kodebagian }}"> <br/>

		<label for ="namabagian">Nama Bagian </label> <input type="text" required="required" name="namabagian" value="{{ $b->namabagian}}" class = "form-control" autocomplete="off"> <br/>

		<label for ="jumlahbagian">Jumlah Bagian </label> <input type="number" name="jumlahbagian" value = "{{ $b->jumlahbagian}}" required="required" pattern= "[0-9]{11}" class = "form-control"> <br/>

        <label for = "tersedia">Tersedia <select id = "tersedia" class = "form-control" name = "tersedia" value = "{{ $b->tersedia}}">
            <option value = "Y">Y</option>
            <option value = "T">T</option>
        </select>
        <br><br>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/bagian" class = "btn btn-primary" > Kembali</a>
    </div>
	</form>
	@endforeach


</body>
@endsection
