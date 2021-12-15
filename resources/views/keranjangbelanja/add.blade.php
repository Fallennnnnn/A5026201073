
   @extends('layout.bahagia')

   @section('title', 'Menambah Keranjang Belanja')
   @section('judulhalaman', 'Tambah Keranjang Belanja')

   @section('konten')
<body>

	<br/>

	<form action="/keranjangbelanja/store" method="post">

		{{ csrf_field() }}
        <div class="form-group">
		<label for = "kodebarang">Kode Barang</label> <input type="textarea" name="kodebarang"required="required" class = "form-control" autocomplete="off"> <br/>

		<label for = "jumlahpembelian">Jumlah Pembelian </label> <input type="textarea" name="jumlahpembelian" required="required" class = "form-control"> <br/>


		<label for = "harga">Harga Per item </label> <input type="textarea" name="harga" required="required" class = "form-control"> <br/>

        <br><br>
		<input type="submit" class = "btn btn-success" value="Simpan Data">
        <a href="/keranjangbelanja" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>

</body>
@endsection
