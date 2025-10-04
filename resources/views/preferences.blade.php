<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пребарување дестинации</title>
    <link rel="stylesheet" href="{{ asset('CSSs/search.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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

<div class="wrapper">
    <div class="form-container">
        <h2>Пронајдете ја вашата идеална дестинација</h2>

        <form method="GET" action="{{ route('destinations.index') }}">
            <div class="form-group">
                <select id="typeDest" name="types_of_places" class="form-control">
                    <option value="" disabled selected>Тип на место</option>
                    <option value="any">Сите</option>
                    <option value="море">Море</option>
                    <option value="планина">Планина</option>
                    <option value="езеро">Езеро</option>
                    <option value="историја">Историја</option>
                    <option value="плажа">Плажа</option>
                    <option value="град">Град</option>
                    <option value="село">Село</option>
                </select>
            </div>
            <div class="form-group">
                <select id="season" name="recommended_season" class="form-control">
                    <option value="" disabled selected>Посакувана сезона</option>
                    <option value="any">Сите</option>
                    <option value="пролет">Пролет</option>
                    <option value="лето">Лето</option>
                    <option value="есен">Есен</option>
                    <option value="зима">Зима</option>
                </select>
            </div>
            <div class="form-group">
                <select id="popularity" name="popularity" class="form-control">
                    <option value="" disabled selected>Популарност</option>
                    <option value="1-2">1-2</option>
                    <option value="3-4">3-4</option>
                    <option value="5-6">5-6</option>
                    <option value="7-8">7-8</option>
                    <option value="9-10">9-10</option>
                </select>
            </div>
            <button type="submit" class="btn mt-3">Во ред</button>
        </form>
    </div>
</div>

@include('footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0p1t8pg6y5kPz3OX3eZ4sP+5eJ5W5p5eYl5Aa5p1WvU5hQQg"
        crossorigin="anonymous"></script>

</body>
</html>
