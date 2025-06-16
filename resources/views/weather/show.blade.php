<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Временска прогноза</title>
    <style>
        .forecast-box {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Временска прогноза за {{ $location }}</h2>

    @foreach ($data['list'] as $forecast)
        <div class="forecast-box">
            <p><strong>{{ \Carbon\Carbon::parse($forecast['dt_txt'])->format('d.m.Y H:i') }}</strong></p>
            <p>Температура: {{ $forecast['main']['temp'] }}°C</p>
            <p>Опис: {{ $forecast['weather'][0]['description'] }}</p>
        </div>
    @endforeach
</div>
</body>
</html>
