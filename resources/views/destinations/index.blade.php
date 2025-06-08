<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Приказ на дестинации</title>
    <link rel="stylesheet" href="{{ asset('CSSs/listDest.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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

<div class="main-content">
    <h3 id="title">Препорачани дестинации</h3>
    <section class="articles">
        @foreach($destinations as $destination)
            <article>
                <div class="article-wrapper">
                    <figure >
                        <img src="https://t4.ftcdn.net/jpg/00/65/48/25/360_F_65482539_C0ZozE5gUjCafz7Xq98WB4dW6LAhqKfs.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>{{ $destination->imelokacija }}</h2>
                        <p>Тип на локација: {{ $destination->tipovimesta }} </p>
                        <a href="{{ route('destinations.show', $destination) }}" class="read-more">
                            Прочитај повеќе
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
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
</body>
</html>
