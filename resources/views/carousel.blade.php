<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Топ 5 дестинации со најмногу настани</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        .custom-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 15px;
            padding-top: 15px;
            min-width: 300px;
            min-height: 180px;
            box-shadow: inset 0 0 10px rgba(47, 175, 170, 0.1),
            0 8px 20px rgba(47, 175, 170, 0.15);
            border: 1.5px solid rgba(47, 175, 170, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            color: rgba(6, 85, 58, 0.82);
        }

        .custom-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 25px 8px rgba(47, 175, 170, 0.35);
        }

        .custom-card h3 {
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 1.5rem;
            position: relative;
            padding-bottom: 8px;
            color: #2fafaa;
        }

        .custom-card h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #2fafaa, #a0dad9);
            border-radius: 2px;
        }

        .custom-card h3 .bi {
            color: #2fafaa;
            font-size: 1.8rem;
            transition: transform 0.4s ease;
        }

        .custom-card:hover h3 .bi-airplane {
            transform: translateX(10px) rotate(15deg);
        }

        .custom-card p {
            font-size: 1.1rem;
            margin-top: 0;
            font-weight: 600;
            letter-spacing: 0.03em;
            color: #1a374d;
        }

        .btn {
            background-color: #2fafaa;
            border-color: #2fafaa;
            transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 10px rgba(47, 175, 170, 0.3);
        }

        .btn:hover, .btn:focus {
            background-color: #248a85;
            border-color: #248a85;
            box-shadow: 0 0 15px 4px rgba(36, 138, 133, 0.7);
        }

        .carousel-inner {
            margin-right: 0;
            margin-bottom: 80px;
        }

    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center" style="padding-bottom: 5vh;
    padding-top: 20vh;">Топ 5 дестинации со најмногу организирани настани</h2>

    <div id="locationsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        @php
            $locations = collect($topLocations);
            $chunks = $locations->chunk(3);
            $lastChunk = $chunks->last();

            if ($lastChunk->count() < 3) {
                $needed = 3 - $lastChunk->count();

                $existingLocations = $lastChunk->keys()->all();
                $remainingLocations = $locations->reject(function($value, $key) use ($existingLocations) {
                    return in_array($key, $existingLocations);
                });

                if ($remainingLocations->count() < $needed) {
                    $toAdd = $remainingLocations;
                } else {
                    $toAdd = $remainingLocations->random($needed);
                }

                $lastChunk = $lastChunk->union($toAdd);

                $chunks->pop();
                $chunks->push($lastChunk);
            }
        @endphp

        <div class="carousel-inner">
            @foreach($chunks as $chunk)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="row justify-content-center w-100 g-4">
                        @foreach($chunk as $location => $count)
                            <div class="col-md-4 d-flex justify-content-center">
                                <div class="custom-card text-center">
                                    <h3>
                                        <i class="bi bi-airplane"></i> {{ $location }}
                                    </h3>
                                    <p>Број на настани: {{ $count }}</p>
                                    <a href="{{ url('destinations/' . urlencode($location)) }}" class="btn btn-sm mt-3">
                                        Повеќе
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
