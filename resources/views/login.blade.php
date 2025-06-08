<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Најава на корисник</title>
    <link rel="stylesheet" href="{{ asset('CSSs/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}" class="nav-link">ПОЧЕТНА</a>
                </li>
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

<div class="wrapper">
    <div class="form-container">
        <h2>Најави се</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="ime" class="form-control" placeholder="Име" required>
            </div>
            <div class="form-group">
                <input type="text" name="prezime" class="form-control" placeholder="Презиме" required>
            </div>
            <div class="form-group">
                <input type="email" name="eposhta" class="form-control" placeholder="Е-пошта" required>
            </div>
            <div class="form-group">
                <input type="tel" name="telbr" class="form-control" placeholder="Телефонски број" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Лозинка" required>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Потврди лозинка"
                       required>
            </div>
            <div class="form-group">
                <input type="date" name="datumragjanje" class="form-control" required>
            </div>
            <div class="form-group">
                <select name="iddest" class="form-control" required>
                    <option value="" disabled selected>Тип корисник</option>
                    <option value="standard">Стандард</option>
                    <option value="premium">Премиум</option>
                </select>
            </div>
            <button type="submit" class="btn">Регистрирај се</button>
        </form>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
