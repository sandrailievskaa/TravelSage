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
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

    <style>
        .weather-container  #weather {
            position: relative;
            display: inline-block;
        }

        #weather {
            height: 23%;
            cursor: pointer;
            margin-left: 13vw;
        }

        .weather-container .tooltip {
            visibility: hidden;
            width: 200px;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            border-radius: 8px;
            padding: 8px;
            position: absolute;
            bottom: 80%;
            left: 35%;
            transform: translateX(-50%);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 14px;
            z-index: 1;
        }

        .weather-container .tooltip::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -6px;
            border-width: 6px;
            border-style: solid;
            border-color: #f0f0f0 transparent transparent transparent;
        }

        .weather-container:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }

        .container {
            margin-bottom: 15vh;
        }

        h1 {
            text-align: center;
        }

        .cards {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
            height: 100vh;
        }

        .cards p {
            width: 45%;
            text-align: justify;
            padding-top: 22vh;
        }

        .card-custom {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            height: 100%;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .card-custom img {
            height: 50vh;
        }

        .row {
            width: 100%;
        }

        #cardPackage .card-custom:hover,
        #cardActivity .card-custom:hover,
        #cardEvent .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
            cursor: pointer;
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


        .cards h1 {
            font-size: 50px;
        }

        .carousel-inner {
            clip-path: polygon(0 0, 100% 0, 100% 95%, 73% 101%, 294% -90%, 90% 99%, -31% 89%, 57% 96%, 41% 94%, 22% 101%, 2% 95%, 9% 96%, 0 92%);
        }

        #cardPackage, #cardActivity, #cardEvent {
            width: 27.333333%;
        }

        #cardsEvents {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: -135vh;
        }

        .container.gallery-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            margin-left: 50vw;
        }

        .tz-gallery .lightbox {
            position: relative;
            overflow: hidden;
            display: block;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .tz-gallery .lightbox img {
            transition: transform 0.4s ease, filter 0.4s ease;
        }

        .tz-gallery .lightbox:hover img {
            transform: scale(1.05);
            filter: brightness(80%);
        }

        .tz-gallery .lightbox::after {
            content: "\f002";
            font-weight: 900;
            color: white;
            font-size: 2rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .tz-gallery .lightbox:hover::after {
            opacity: 1;
        }

        .tz-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            padding-bottom: 190vh;
        }

        .tz-gallery .lightbox {
            height: 100%;
            width: 100%;
        }

        .tz-gallery .lightbox img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }

        .tz-gallery .wide {
            grid-column: span 2;
        }

        .tz-gallery .row > div {
            padding: 2px;
        }

        .tz-gallery .lightbox img {
            width: 100%;
            border-radius: 0;
            position: relative;
        }

        .tz-gallery .lightbox:before {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -13px;
            margin-left: -13px;
            opacity: 0;
            content: '\e003';
            pointer-events: none;
            z-index: 9000;
            transition: 0.4s;
        }


        .tz-gallery .lightbox:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            content: '';
            transition: 0.4s;
        }

        .tz-gallery .lightbox:hover:after,
        .tz-gallery .lightbox:hover:before {
            opacity: 1;
        }

        .baguetteBox-button {
            background-color: transparent !important;
        }

        @media (max-width: 768px) {
            body {
                padding: 0;
            }
        }

        .map {
            margin-top: -20%;
            width: 100%;
            height: 125vh;
            background-image: url(http://127.0.0.1:8000/images/map.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;
            opacity: 0.7;
            filter: brightness(112%) saturate(120%);
        }

        .map-overlay {
            width: 100%;
            height: 100%;
            background: rgb(255 255 255 / 15%);
            backdrop-filter: blur(15px);
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

<div>
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

        <div class="weather-container">
            <a href="{{ route('weather.show', ['imelokacija' => $destination->imelokacija]) }}">
                <img id="weather" src="{{ asset('images/weather.png') }}" alt="Weather">
            </a>
            <div class="tooltip">Погледнете ја временската прогноза</div>
        </div>
    </div>


    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">

                <div class="col-sm-12 col-md-4">
                    <a class="lightbox"
                       href="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '1.jpg') }}">
                        <img src="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '1.jpg') }}"
                             alt="Image 1 for {{ $destination->imelokacija }}">
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                       href="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '2.jpg') }}">
                        <img src="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '2.jpg') }}"
                             alt="Image 2 for {{ $destination->imelokacija }}">
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                       href="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '3.jpg') }}">
                        <img src="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '3.jpg') }}"
                             alt="Image 3 for {{ $destination->imelokacija }}">
                    </a>
                </div>

                <div class="col-sm-12 col-md-8">
                    <a class="lightbox"
                       href="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '4.jpg') }}">
                        <img src="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '4.jpg') }}"
                             alt="Image 4 for {{ $destination->imelokacija }}">
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                       href="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '5.jpg') }}">
                        <img src="{{ asset('images/destinations/' . strtolower($destination->imelokacija) . '5.jpg') }}"
                             alt="Image 5 for {{ $destination->imelokacija }}">
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container" style="height: auto">
    <div id="cardsEvents" class="row">

        <div id="cardEvent" class="col-md-4 col-sm-6 mb-4">
            <a href="{{ route('travelEvents.index', ['destination' => $destination->imelokacija]) }}"
               class="text-decoration-none">

                <div class="card-custom">
                    <img src="{{ asset('images/nastani.png') }}" alt="Настани" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Настани</h5>
                    </div>
                </div>
            </a>
        </div>

        <div id="cardActivity" class="col-md-4 col-sm-6 mb-4">
            <a href="{{ route('travelActivities.index', ['imelokacija' => $destination->imelokacija]) }}"
               class="text-decoration-none">
                <div class="card-custom">
                    <img src="{{ asset('images/aktivnosti.png') }}" alt="Активности" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Активности</h5>
                    </div>
                </div>
            </a>
        </div>

        <div id="cardPackage" class="col-md-4 col-sm-6 mb-4">
            <a href="{{ route('travelPackages.index', ['imelokacija' => $destination->imelokacija]) }}"
               class="text-decoration-none">
                <div class="card-custom">
                    <img src="{{ asset('images/paketi.png') }}" alt="Пакети" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Пакети</h5>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>


<div class="map">
    <div class="map-overlay">
    </div>
</div>

@include('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
