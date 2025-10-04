<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Приказ на дестинации</title>
    <link rel="stylesheet" href="{{ asset('CSSs/listDest.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        figure {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        figure img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }
    </style>

</head>
<body>
@include('navbar')

<div class="main-content">
    <h2 id="title">ПРЕПОРАЧАНИ ДЕСТИНАЦИИ</h2>
    <section class="articles">
        @foreach($destinations as $destination)
            @php
                $images = ['imgg1.jpg', 'imgg2.jpg', 'imgg3.jpg', 'imgg4.jpg', 'imgg5.jpg', 'imgg6.jpg', 'imgg7.jpg'];
                $randomImage = $images[array_rand($images)];
            @endphp
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="{{ asset('images/' . $randomImage) }}" alt=""/>
                    </figure>
                    <div class="article-body">
                        <h2>{{ $destination->location_name }}</h2>
                        <p>Тип на локација: {{ $destination->types_of_places }} </p>
                        <a href="{{ route('destinations.show', $destination) }}" class="read-more">
                            Прочитај повеќе
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
</div>

@include('footer')

</body>
</html>
