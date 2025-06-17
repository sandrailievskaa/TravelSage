<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8"/>
    <title>Евтини активности</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");

        body {
            font-size: 16px;
            font-weight: normal;
            margin: 0;
        }

        a, a:hover {
            text-decoration: none;
            transition: color 0.3s ease-in-out;
            color: #064937; /* темно-зелена */
        }

        a:hover {
            color: #89d6ca;
        }

        #pageHeaderTitle {
            margin: 2rem 0;
            text-transform: uppercase;
            text-align: center;
            font-size: 2.5rem;
            color: #074f44;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        .postcard {
            display: flex;
            border-radius: 10px;
            margin-bottom: 2rem;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(48, 176, 156, 0.4);
            background: linear-gradient(135deg, rgba(158, 207, 195, 0.49) 0%, rgba(168, 222, 217, 0.36) 100%);
            color: #074f44;
            transition: box-shadow 0.3s ease;
        }

        @media screen and (min-width: 769px) {
            .postcard:nth-child(2n+1) {
                flex-direction: row;
            }

            .postcard:nth-child(2n) {
                flex-direction: row-reverse;
            }
        }

        .postcard:hover {
            box-shadow: 0 8px 30px rgba(48, 176, 156, 0.7);
        }

        .postcard__img {
            width: 330px;
            object-fit: cover;
            transition: transform 0.3s ease;
            height: 270px;
            object-position: center;
            display: block;
        }

        .postcard:hover .postcard__img {
            transform: scale(1.1);
        }

        .postcard__text {
            padding: 2rem 3rem;
            flex: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .postcard__title {
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #064937;
        }

        .postcard__bar {
            width: 50px;
            height: 6px;
            border-radius: 5px;
            background-color: #30b09c;
            margin: 10px 0 20px 0;
            transition: width 0.3s ease;
        }

        .postcard:hover .postcard__bar {
            width: 100px;
        }

        .postcard__preview-txt {
            font-size: 1rem;
            line-height: 1.5;
            color: #064937;
            text-align: justify;
            flex-grow: 1;
        }

        .postcard__tagbox {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .tag__item {
            background-color: rgba(48, 176, 156, 0.2);
            color: #064937;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
            user-select: none;
            transition: background-color 0.3s;
            cursor: default;
        }

        .tag__item:hover {
            background-color: rgba(48, 176, 156, 0.5);
        }

        i.fas {
            color: #30b09c;
        }

    </style>
</head>
<body>
<div class="container">
    <h1 id="pageHeaderTitle">Активности под 500 денари</h1>

    @php
        $travelImages = [
            'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=300&q=80',
            'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=300&q=80',
            'https://images.unsplash.com/photo-1486308510493-cb6b4f4cbcf3?auto=format&fit=crop&w=300&q=80',
            'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=300&q=80',
            'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=300&q=80',
        ];
    @endphp

    @foreach($cheapActivities as $activity)
        @php
            $randomNumber = rand(1, 6);
            $imagePath = asset("images/activities{$randomNumber}.jpg");
        @endphp

        <article class="postcard">
            <img class="postcard__img" src="{{ $imagePath }}" alt="activity image"/>
            <div class="postcard__text">
                <h1 class="postcard__title"><a href="#">{{ $activity->imeaktivnost }}</a></h1>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $activity->informacii }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item">💸 {{ $activity->iznos }} ден.</li>
                    <li class="tag__item"><i class="fas fa-tag"></i> {{ $activity->kategorija }}</li>
                </ul>
            </div>
        </article>
    @endforeach

</div>
</body>
</html>
