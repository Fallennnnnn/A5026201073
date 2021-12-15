
   @extends('layout.bahagia')

   @section('title', ' Data Keranjang Belanja')
   @section('judulhalaman', 'Tampilan Data Keranjang Belanja')

   @section('konten')
    <style>
        table th {
            text-align: center;
        }
        </style>

	<br/>

    <a href="/keranjangbelanja/add" class = "btn btn-primary" > Tambah Data Awal</a>
        <br><br>
	<table border="2" class = "table table-hover text-center">

		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>

		@foreach($belanja as $b)
		<tr>
			<td>{{ $b->ID }}</td>
			<td>{{ $b->KodeBarang }}</td>
            <td>{{ $b->Jumlah }}</td>
            <td>{{ number_format($b->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($b->Jumlah * $b->Harga, 0, ',', '.') }} </td>
			<td>
				<a href="/keranjangbelanja/add" class = "btn btn-primary" > Beli</a>
                | <a href="/keranjangbelanja/hapus/{{ $b->ID}}" class ="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $belanja->links() }}

</body>
@endsection
