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
        .footerIcons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            justify-items: center;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <img class="logo" src="{{ asset('images/logo.png') }}">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">ПОЧЕТНА</a></li>
                <li class="nav-item"><a href="#za-nas" class="nav-link">ЗА НАС</a></li>
                <li class="nav-item"><a href="#kontakt" class="nav-link">КОНТАКТ</a></li>
            </ul>
        </div>
    </div>
</nav>

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
        <span class="button__text">НАЈАВА</span>
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

<footer id="kontakt" class="bg-body-tertiary text-center">
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

        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    TravelSage
                </h6>
                <p>
                    Иновативен концепт за паметен избор на локација за патување.
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Контакт</h6>
                <p><i class="fas fa-home mr-3"></i> Скопје, Р. С. Македонија</p>
                <p><i class="fas fa-envelope mr-3"></i> travelSage@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 389 77 888 888</p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Заследете не</h6>
                <section class="footerIcons">
                    <a class="btn social-icon" style="background-color: #3b5998;" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn social-icon" style="background-color: #55acee;" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn social-icon" style="background-color: #dd4b39;" href="#"><i
                            class="fab fa-google"></i></a>
                    <a class="btn social-icon" style="background-color: #ac2bac;" href="#"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn social-icon" style="background-color: #0082ca;" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn social-icon" style="background-color: #333333;" href="#"><i
                            class="fab fa-github"></i></a>
                </section>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

