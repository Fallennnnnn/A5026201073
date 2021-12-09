@extends('layout.bahagia')

@section('title', 'Detail Data Bagian')
@section('judulhalaman', 'Detail Data Bagian')

@section('konten')

    <body>


        @foreach ($bagian as $b)
            <br>
            <div>
                <label for="namabagian">Nama Bagian </label>
                <p>{{ $b->namabagian }}
                <p>
            </div>

            <div>
                <label for="jumlahbagian">Jumlah Bagian </label>
                <p>{{ $b->jumlahbagian }}
                <p>
            </div>

            <div>
                <label for="tersedia">Tersedia </label>
                <p>{{ $b->tersedia }}
                <p>
            </div>

                <a href="/bagian" class="btn btn-primary"> Kembali</a>
                <br><br>
                </div>


        @endforeach


    </body>
@endsection
