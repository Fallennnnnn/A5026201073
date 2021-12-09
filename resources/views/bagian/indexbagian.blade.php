
   @extends('layout.bahagia')

   @section('title', ' Data Bagian')
   @section('judulhalaman', 'Tampilan Data Bagian')

   @section('konten')
    <style>
        table th {
            text-align: center;
        }
        </style>

	<a href="/bagian/add" class = "btn btn-primary" >  Tambah Bagian Baru</a>

	<br/>
	<br/>
    <p>Cari Data Bagian</p>
    <div class="container">
        <div class="form-group col-sm-6">
        <form action="/bagian/cari" method="GET">
            <input type="text" class = "form-control"name="cari" placeholder="Cari Bagian .." value="{{ old('cari') }}" autocomplete="off">
        </div>
            <input type="submit" class = "btn btn-primary" value="CARI">
        </form>
    </div>
	<table border="2" class = "table table-hover text-center">

		<tr>
			<th>Kode Bagian</th>
			<th>Nama Bagian</th>
			<th>Jumlah Bagian</th>
            <th>Tersedia</th>
            <th>Opsi</th>
		</tr>

		@foreach($bagian as $b)
		<tr>
			<td>{{ $b->kodebagian }}</td>
			<td>{{ $b->namabagian }}</td>
            <td>{{ $b->jumlahbagian }}</td>
            <td>{{ $b->tersedia }}</td>
			<td>
				<a href="/bagian/view/{{ $b->kodebagian }}">View Detail</a>
				| <a href="/bagian/edit/{{ $b->kodebagian }}">Edit</a>
                | <a href="/bagian/hapus/{{ $b->kodebagian }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $bagian->links() }}

</body>
@endsection
