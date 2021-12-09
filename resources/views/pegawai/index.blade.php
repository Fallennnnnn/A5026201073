
   @extends('layout.bahagia')

   @section('title', ' Data Pegawai')
   @section('judulhalaman', 'Tampilan Data Pegawai')

   @section('konten')

	<a href="/pegawai/tambah" class = "btn btn-primary" >  Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <p>Cari Data Pegawai : </p>
    <div class="container">
        <div class="form-group col-sm-6">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class = "form-control"name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        </div>
            <input type="submit" class = "btn btn-primary" value="CARI">
        </form>
    </div>
	<table border="2" class = "table table-hover">

		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
				| <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                | <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

</body>
@endsection
