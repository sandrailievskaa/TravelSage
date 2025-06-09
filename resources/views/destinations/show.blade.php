<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Детали за дестинација</title>
    <link rel="stylesheet" href="{{ asset('CSSs/detailsDest.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <style>
        #weather {
            height: 15%;
            border-radius: 50%;
            cursor: pointer;
        }

        .container {
            margin-bottom: 15vh;
        }

        h1 {
            text-align: center;
        }

        .cards {
            padding-top: 0!important;
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
        }

        .cards p {
            width: 45%;
            text-align: justify;
            padding-top: 5vh;
        }

        .card-custom {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            height: 100%;
            width: 100%;
        }

        .row {
            width: 100%;
        }

        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
        }

        .card-img-top {
            width: 100%;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .carousel-inner {
            clip-path: polygon(0 0, 100% 0, 100% 95%, 73% 101%, 294% -90%, 90% 99%, -31% 89%, 57% 96%, 41% 94%, 22% 101%, 2% 95%, 9% 96%, 0 92%);
        }
    </style>
</head>
<body>

@include('navbar')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1500">
            <img src="{{ asset('images/5.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
            <img src="{{ asset('images/6.webp') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
            <img src="{{ asset('images/4.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
            <img src="{{ asset('images/1.webp') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
            <img src="{{ asset('images/2.webp') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
            <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="cards">
    <h1>{{ $destination->imelokacija }}</h1>
    <p>Краток опис за локацијата <br> <br>{{ $destination->imelokacija }} се наоѓа во {{ $destination->drzhava }}
        со геоографски координати {{ $destination->lat }} и {{ $destination->lon }}. <br><br>
        Тип на место: {{ $destination->tipovimesta }}. {{ $destination->opislokacija }}, додека пак автентично место
        или пак место што доколку го посетите, а не отидете таму ќе зажалите е токму {{ $destination->ime }}.
        {{ $destination->opis }} Популарност на местото е оценетта со {{ $destination->popularnost }}.<br><br>
        Вообичаена препорачана сезона за посета: {{ $destination->preporachanasezona }}
        и просечните температури се {{ $destination->prosechnatemp }} степени.
    </p>

    <img id="weather" src="{{ asset('images/weather.jpg') }}">
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card-custom">
                <img src="{{ asset('images/cards.jpg') }}" alt="Настани" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Настани</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card-custom">
                <img src="{{ asset('images/cards.jpg') }}" alt="Активности" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Активности</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card-custom">
                <img src="{{ asset('images/cards.jpg') }}" alt="Пакети" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Пакети</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
