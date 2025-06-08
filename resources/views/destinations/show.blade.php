<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Детали за дестинација</title>
    <link rel="stylesheet" href="{{ asset('CSSs/detailsDest.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <img class="logo" src="{{ asset('images/logo.png') }}">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link">ПОЧЕТНА</a></li>
                <li class="nav-item"><a class="nav-link">ЗА НАС</a></li>
                <li class="nav-item"><a class="nav-link">КОНТАКТ</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="cards">
    <h1>{{ $destination->imelokacija }}</h1>
    <p>Краток опис за локацијата <br> {{ $destination->imelokacija }} се наоѓа во {{ $destination->drzhava }}
        со геоографски координати {{ $destination->lat }} и {{ $destination->lon }}.
        Тип на место:  {{ $destination->tipovimesta }}. {{ $destination->opislokacija }}, додека пак автентично место
        или пак место што доколку го посетите, а не отидете таму ќе зажалите е токму {{ $destination->ime }}.
        {{ $destination->opis }}  Популарност на местото е оценетта со {{ $destination->popularnost }}.
        Вообичаена препорачана сезона за посета: {{ $destination->preporachanasezona }}
        и просечните температури се {{ $destination->prosechnatemp }} степени.
    </p>

    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                        <div class="content">
                            <h6 class="category">Настани</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                        <div class="content">
                            <h6 class="category">Активности</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                        <div class="content">
                            <h6 class="category">Пакети</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span class="icon-container">
    <i class="fa-solid fa-cloud"></i>
    <i class="fa-solid fa-sun"></i>
  </span>

    <button type="submit" id="rez">
        Резервирај
    </button>
</div>

<div class="gallery">
    <img src="https://picsum.photos/id/1040/300/300" alt="a house on a mountain">
    <img src="https://picsum.photos/id/106/300/300" alt="sime pink flowers">
    <img src="https://picsum.photos/id/136/300/300" alt="big rocks with some trees">
    <img src="https://picsum.photos/id/1039/300/300" alt="a waterfall, a lot of tree and a great view from the sky">
    <img src="https://picsum.photos/id/110/300/300" alt="a cool landscape">
    <img src="https://picsum.photos/id/1047/300/300" alt="inside a town between two big buildings">
    <img src="https://picsum.photos/id/1057/300/300" alt="a great view of the sea above the mountain">
</div>


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

        <section class="footerIcons">
            <a class="btn social-icon" style="background-color: #3b5998;" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn social-icon" style="background-color: #55acee;" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn social-icon" style="background-color: #dd4b39;" href="#"><i class="fab fa-google"></i></a>
            <a class="btn social-icon" style="background-color: #ac2bac;" href="#"><i class="fab fa-instagram"></i></a>
            <a class="btn social-icon" style="background-color: #0082ca;" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn social-icon" style="background-color: #333333;" href="#"><i class="fab fa-github"></i></a>
        </section>
    </div>

    <div class="text-center p-3">© 2025 Copyright</div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
