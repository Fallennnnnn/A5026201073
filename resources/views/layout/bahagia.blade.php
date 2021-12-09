<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>
<style>
    .container {
        border-style: solid border-color: black;
    }

</style>

<body>
    <div class="container">
        <br>
        <header class="well well-sm " style = background:#e7e4e4>
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{ URL::asset('/images/ega2.jpg') }}" alt="fotoega" width="100px">
                </div>
                <div class="col-sm-4">
                    <br>
                    <h1>Ega Fernanda Putra</h1>
                </div>
                <br>
                <div class="col-sm-4">
                    <h1>5026201073</h1>
                </div>
            </div>
        </header>

        <div class="row">

            <div class="col-sm-3 text-center">
            <div class="well well-sm" style = background:#e7e4e4>
                    <h2>Tempat Navigasi</h2>
            </div>
            <div class="well" style = "background: #e7e4e4">
                    <ul class="nav flex-column">
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default" href="/pegawai">Pegawai</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default" href="/absen">Absen</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default" href="/pendapatan">Pendapatan</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default disabled" >Minggu Depan</a>
                            <br>
                        <li class="nav-item">
                            <a class="btn btn-default disabled" >Praktikum</a>
                        </li>

                        <br>
                    </ul>
                </div>
                </div>



            <div class="col-sm-9" style = background-color:#f3eded>

                    <h3>@yield('judulhalaman')</h3>

                    @section('konten')

                    @show
                </div>
        </div>
        <footer class = "text-center">

                        <h3>Hak Cipta Oleh 5026201073 - Ega Fernanda Putra </h3>
            </div>
        </footer>
    </div>

</body>

</html>
