<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Временска прогноза</title>
    <style>
        body {
            background: #f4f6f8;
            margin: 0;
            padding: 20px;
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .forecast-box {
            border-radius: 10px;
            padding: 15px 20px;
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .forecast-box:hover {
            transform: scale(1.02);
        }

        .forecast-info {
            flex: 1;
        }

        .forecast-info p {
            margin: 4px 0;
            color: #222;
        }

        .forecast-icon img {
            width: 60px;
            height: 60px;
        }

        .clear { background-color: #fffbe6; }       /* сончево */
        .clouds { background-color: #e9eff5; }      /* облачно */
        .rain { background-color: #dbeafe; }        /* дождливо */
        .snow { background-color: #f0f4f8; }        /* снег */
        .thunderstorm { background-color: #e0e0e0; }
        .drizzle { background-color: #cfe2f3; }
        .mist, .fog { background-color: #eeeeee; }

        .day-heading {
            margin-top: 40px;
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: #555;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Временска прогноза за {{ $location }}</h2>

    @php $currentDate = ''; @endphp

    @foreach ($data['list'] as $forecast)
        @php
            $date = \Carbon\Carbon::parse($forecast['dt_txt'])->format('d.m.Y');
            $time = \Carbon\Carbon::parse($forecast['dt_txt'])->format('H:i');
            $weatherMain = strtolower($forecast['weather'][0]['main']); // e.g. Clear, Rain
            $weatherMain = match ($weatherMain) {
                'clear' => 'clear',
                'clouds' => 'clouds',
                'rain' => 'rain',
                'snow' => 'snow',
                'thunderstorm' => 'thunderstorm',
                'drizzle' => 'drizzle',
                'mist', 'fog' => 'mist',
                default => '',
            };
        @endphp

        @if ($date != $currentDate)
            <h3 class="day-heading">📅 {{ $date }}</h3>
            @php $currentDate = $date; @endphp
        @endif

        <div class="forecast-box {{ $weatherMain }}">
            <div class="forecast-info">
                <p><strong>🕒 {{ $time }}</strong></p>
                <p>🌡 Температура: {{ $forecast['main']['temp'] }}°C</p>
                <p>🤔 Се чувствува: {{ $forecast['main']['feels_like'] }}°C</p>
                <p>💧 Влажност: {{ $forecast['main']['humidity'] }}%</p>
                <p>🌬 Ветер: {{ $forecast['wind']['speed'] }} m/s</p>
                <p>📝 Опис: {{ $forecast['weather'][0]['description'] }}</p>
            </div>
            <div class="forecast-icon">
                <img src="https://openweathermap.org/img/wn/{{ $forecast['weather'][0]['icon'] }}@2x.png" alt="Икона">
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
