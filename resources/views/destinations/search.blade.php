<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пребарување дестинации</title>
    <link rel="stylesheet" href="{{ asset('CSSs/search.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">ПОЧЕТНА</a></li>
                <li class="nav-item"><a class="nav-link" href="#">ЗА НАС</a></li>
                <li class="nav-item"><a class="nav-link" href="#">КОНТАКТ</a></li>
            </ul>
        </div>
    </div>
</nav>

<h2>Резултати од пребарување</h2>
@if($results->isEmpty())
    <p>Нема резултати според избраните критериуми.</p>
@else
    <ul>
        @foreach($results as $destination)
            <li>{{ $destination->name }} - {{ $destination->tipovimesta }} - {{ $destination->preporachanasezona }}</li>
        @endforeach
    </ul>
@endif

<footer class="bg-body-tertiary text-center">
    <div class="container p-4 pb-0">
        <div class="container p-4">
            <section class="imgFooter">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f1.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f4.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f3.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f5.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f2.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f6.jpg') }}" class="w-100 rounded shadow">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="text-center p-3">© 2025 Copyright</div>
</footer>

</body>
</html>
