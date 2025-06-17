<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TravelSage</title>
    <link rel="stylesheet" href="{{ asset('CSSs/homeStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
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

<ol>
    <h1 class="titleCircle">Креирајте го вашето идеално патување</h1>
    <li>
        <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
        <div class="descr">Започнете ја вашата авантура со креирање на персонализиран профил.</div>
    </li>
    <li>
        <div class="icon"><i class="fa-regular fa-heart"></i></div>
        <div class="descr">Споделете ги вашите преференци.</div>
    </li>
    <li>
        <div class="icon"><i class="fa-solid fa-plane"></i></div>
        <div class="descr">Истражете дестинации кои одговараат на вашите интереси.</div>
    </li>
    <li>
        <div class="icon"><i class="fa-regular fa-comments"></i></div>
        <div class="descr">Дознајте од искуствата на други патници за да донесете правилен избор.</div>
    </li>
    <li>
        <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
        <div class="descr">Дозволете да ви помогнеме при одлуката за патување што најмногу ви одговара.</div>
    </li>
    <li>
        <div class="icon"><i class="fa-solid fa-rocket"></i></div>
        <div class="descr">Резервирајте и започнете со истражување на нови хоризонти.</div>
    </li>
</ol>

<div class="container">
    <a href="{{ route('login') }}" class="button type--C">
        <div class="button__line"></div>
        <div class="button__line"></div>
        <span class="button__text">РЕГИСТРАЦИЈА</span>
        <div class="button__drow1"></div>
        <div class="button__drow2"></div>
    </a>
</div>


<div id="za-nas" class="responsive-container-block bigContainer">
    <div class="responsive-container-block Container">
        <div class="responsive-container-block leftSide">
            <p class="text-blk heading">Вашиот персонализиран водич за совршени патувања</p>
            <p class="text-blk subHeading">
                TravelSage не е само платформа – тоа е вашиот личен патоказ кон совршеното патување!
                Со комбинација на интуитивни препораки, реални искуства и паметна анализа на временските услови, го
                претвораме планирањето на
                авантурите во незаборавно доживување. Без разлика дали барате егзотични плажи, урбани авантури или
                скриени природни чуда,
                ние ќе ви помогнеме да го најдете вистинското место во вистинскиот момент.<br>
                Истражувај. Патувај. Доживеј.
            </p>
        </div>
        <div class="responsive-container-block rightSide">
            <img class="number1img" src="{{ asset('images/img5.jpg') }}">
            <img class="number2img" src="{{ asset('images/img7.jpg') }}">
            <img class="number3img" src="{{ asset('images/img2.jpg') }}">
            <img class="number5img" src="{{ asset('images/img6.jpg') }}">
            <img class="number4vid" src="{{ asset('images/img4.jpg') }}">
            <img class="number7img" src="{{ asset('images/img1.jpg') }}">
            <img class="number6img" src="{{ asset('images/img3.jpg') }}">
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="main-content">
        <div>
            <p><i class="fa-light fa-person-walking-luggage fa-xl" style="color: #33b298;"></i></p>
        </div>
    </div>
</div>


@include('carousel', ['topLocations' => $topLocations])
@include('cheap', ['cheapActivities' => $cheapActivities])
@include('footer')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

