<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Временска прогноза</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #e9eff5;
            margin: 0;
            padding: 40px 20px;
        }

        h2, h3.day-title {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-bottom: 40px;
        }

        .weather-card {
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 300px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
        }

        .card-top {
            padding: 20px;
            text-align: center;
        }

        .card-top h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 500;
        }

        .card-top p {
            margin: 5px 0;
            font-size: 16px;
        }

        .card-body {
            padding: 20px;
            font-size: 15px;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .card-body p {
            margin: 10px 0;
        }

        .weather-icon {
            width: 80px;
            margin: 10px auto;
            display: block;
        }

        @media (min-width: 768px) {
            .col-3 {
                flex: 0 0 23%;
            }
        }

        @media (max-width: 767px) {
            .col-3 {
                flex: 0 0 45%;
            }
        }

        @media (max-width: 500px) {
            .col-3 {
                flex: 0 0 100%;
            }
        }

        .bg-sunny {
            background: linear-gradient(135deg, #fff6d2, #f4e8a9);
            color: #333;
        }

        .bg-rainy {
            background: linear-gradient(135deg, #2193b0, #6dd5ed);
        }

        .bg-cloudy {
            background: linear-gradient(135deg, #bdc3c7, #2c3e50);
        }

        .bg-snowy {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #000;
        }

        .bg-night {
            background: linear-gradient(135deg, #141e30, #243b55);
        }

        .bg-mist {
            background: linear-gradient(135deg, #757f9a, #d7dde8);
            color: #222;
        }

        .weather-card {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>

<div class="container">
    <h2>🌍 Временска прогноза за {{ $location }}</h2>

    @php $currentDate = ''; @endphp

    @foreach ($data['list'] as $forecast)
        @php
            $date = \Carbon\Carbon::parse($forecast['dt_txt'])->format('d.m.Y');
            $time = \Carbon\Carbon::parse($forecast['dt_txt'])->format('H:i');
            $hour = (int)\Carbon\Carbon::parse($forecast['dt_txt'])->format('H');
            $description = ucfirst($forecast['weather'][0]['description']);
            $icon = $forecast['weather'][0]['icon'];
            $temp = round($forecast['main']['temp']);
            $feels_like = round($forecast['main']['feels_like']);
            $humidity = $forecast['main']['humidity'];
            $wind = $forecast['wind']['speed'];
            $warning = $wind > 8 ? '⚠ Можен силен ветер!' : '—';

            $main = strtolower($forecast['weather'][0]['main']);
            $backgroundClass = match(true) {
                $hour >= 18 => 'bg-night',
                $main === 'rain' => 'bg-rainy',
                $main === 'clear' => 'bg-sunny',
                $main === 'clouds' => 'bg-cloudy',
                $main === 'snow' => 'bg-snowy',
                $main === 'mist', $main === 'fog' => 'bg-mist',
                default => 'bg-cloudy',
            };
        @endphp

        @if ($currentDate !== $date)
            @if ($currentDate !== '') </div> @endif
<h3 class="day-title">📅 {{ $date }}</h3>
<div class="row">
    @php $currentDate = $date; @endphp
    @endif

    <div class="weather-card col-3 {{ $backgroundClass }}">
        <div class="card-top">
            <h3>{{ $description }}</h3>
            <p>🕒 {{ $time }}</p>
            <img src="https://openweathermap.org/img/wn/{{ $icon }}@2x.png" alt="Икона" class="weather-icon">
            <p><strong>🌡 {{ $temp }}°C</strong> / Се чувствува: {{ $feels_like }}°C</p>
        </div>
        <div class="card-body">
            <p><strong>Состојба:</strong> {{ $description }}</p>
            <p><strong>Влажност:</strong> 💧 {{ $humidity }}%</p>
            <p><strong>Ветер:</strong> 🌬 {{ $wind }} m/s</p>
        </div>
    </div>
    @endforeach
</div>

</div>

</body>
</html>
