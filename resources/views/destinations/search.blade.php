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

@include('navbar')

<h2>Резултати од пребарување</h2>
@if($results->isEmpty())
    <p>Нема резултати според избраните критериуми.</p>
@else
    <ul>
        @foreach($results as $destination)
            <li>{{ $destination->location_name }} - {{ $destination->types_of_places }} - {{ $destination->recommended_season }}</li>
        @endforeach
    </ul>
@endif

@include('footer')

</body>
</html>
