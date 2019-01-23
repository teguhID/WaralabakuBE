<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Waralabaku</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="btn btn-outline-primary" href="{{ url('/datawaralaba') }}"> Data Waralaba <span class="sr-only">(current)</span></a>
                    <a class="btn btn-outline-primary" href="{{ url('/bobot') }}">Data Bobot</a>
                    <a class="btn btn-outline-primary" href="{{ url('/jenisattribut') }}">Data Jenis Attribut</a>
                    <a class="btn btn-outline-primary" href="#">Data Hasil Attribut</a>
                    <a class="btn btn-outline-primary" href="#">Data Preferensi</a>
                    <a class="btn btn-outline-primary" href="#">Data Hasil</a>
                  </div>
                </div>
        </nav></br>
    
        <div class="d-flex justify-content-center">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
</body>
</html>