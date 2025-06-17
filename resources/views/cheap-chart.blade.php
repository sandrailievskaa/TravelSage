<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8"/>
    <title>Процент на евтини активности</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            padding: 40px;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .text-area {
            flex: 1;
            text-align: left;
        }

        .text-area h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        canvas#cheapChart {
            width: 500px !important;
            height: 500px !important;
            box-shadow: 0 10px 20px rgba(48, 176, 156, 0.3);
            border-radius: 20px;
            background: linear-gradient(135deg, #e0f7f4, #b0e4dc);
            padding: 15px;
        }

        @media (max-width: 800px) {
            .container {
                flex-direction: column;
                gap: 30px;
            }

            canvas#cheapChart {
                width: 90% !important;
                height: auto !important;
            }

            .text-area {
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="text-area">
        <h2>Дестинации со најголем процент на достапни (евтини) активности</h2>
        <p>Ова е приказ на процентот евтини активности по дестинација. Графикот покажува колку од активностите во
            одредена локација се достапни по најниски цени.</p>
    </div>
    <canvas id="cheapChart"></canvas>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('cheapChart').getContext('2d');

        const data = {
            labels: {!! json_encode($data->pluck('imelokacija')) !!},
            datasets: [{
                label: 'Процент на евтини активности',
                data: {!! json_encode($data->pluck('procent_cheap')) !!},
                backgroundColor: [
                    '#2faca7', '#6fd6bf', '#31b093', '#a3e5d7', '#33b298',
                    '#94dbd2', '#34b38c', '#b0f2e3', '#2daebc', '#d0f5ef'
                ],
                borderColor: '#ffffff',
                borderWidth: 1
            }]
        };

        new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#064937',
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return context.label + ': ' + context.parsed.toFixed(1) + '%';
                            }
                        }
                    }
                }
            }
        });
    });
</script>
</body>
</html>
