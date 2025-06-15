<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Настани</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
        .cardsStyle {
            display: inline-block;
            float: right;
            margin-top: 8%;
            margin-right: 5%;
        }

    </style>
</head>
<body>
@include('navbar')

<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('images/greece.jpg') }}" class="d-block w-100" alt="...">
    </div>

    <div class="cardsStyle">
        @if(isset($nastani) && $nastani->count())
            @foreach($nastani as $event)
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ $event->naziv }}</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">{{ $event->vidovi }}</h5>
                        <p class="card-text">{{ $event->detali }}</p>
                        <p class="card-text">
                            <strong>Од:</strong> {{ $event->pochetendatum }}<br>
                            <strong>До:</strong> {{ $event->kraendatum }}
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <p>Нема настани за оваа локација.</p>
        @endif
    </div>
</div>


@include('footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0p1t8pg6y5kPz3OX3eZ4sP+5eJ5W5p5eYl5Aa5p1WvU5hQQg"
        crossorigin="anonymous"></script>
</body>
</html>
