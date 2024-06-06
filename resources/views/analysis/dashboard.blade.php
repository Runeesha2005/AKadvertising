<x-app-layout>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Analytics Dashboard</title>
        <!-- Include Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
            canvas {
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                width: 400px; /* Adjust width */
                height: 300px; /* Adjust height */
            }
            .chart-container {
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
{{--    <h1>Analytics Dashboard</h1>--}}
{{--    <div>--}}
{{--        <h2>User Count: {{ $userCount }}</h2>--}}
{{--        <h2>Subscription Count: {{ $consultationRequestCount }}</h2>--}}
{{--    </div>--}}
{{--<h1 style="text-align: center; font-size: 36px;">Analytics Dashboard</h1>--}}
{{--<div style="text-align: center;">--}}
{{--    <h2 style="font-size: 24px;">User Count: {{ $userCount }}</h2>--}}
{{--    <h2 style="font-size: 24px;">Consultation Request Count: {{ $consultationRequestCount }}</h2>--}}
{{--</div>--}}

<h1 style="text-align: center; font-size: 36px;">Analytics Dashboard</h1>
<div style="text-align: center;">
    <a href="{{ route('user.index') }}" style="text-decoration: none; color: inherit;">
        <h2 style="font-size: 24px; cursor: pointer;">User Count: {{ $userCount }}</h2>
    </a>
    <a href="{{ route('admin.dashboard') }}" style="text-decoration: none; color: inherit;">
        <h2 style="font-size: 24px; cursor: pointer;">Consultation Request Count: {{ $consultationRequestCount }}</h2>
    </a>
</div>

    <div class="chart-container">
        <canvas id="userChart"></canvas>
        <canvas id="consultationRequestChart"></canvas>
    </div>

    <script>
        // User Count Chart
        var userCountChart = new Chart(document.getElementById('userChart'), {
            type: 'doughnut',
            data: {
                labels: ['Active Users', 'Inactive Users'],
                datasets: [{
                    data: [{{ $userCount }}, 100 - {{ $userCount }}],
                    backgroundColor: ['#e54919', '#ffcc29']
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'User Count'
                },
                responsive: false
            }
        });

        // Subscription Count Chart
        var subscriptionCountChart = new Chart(document.getElementById('consultationRequestChart'), {
            type: 'bar',
            data: {
                labels: ['Consultation Requests'],
                datasets: [{
                    label: 'Consultation Request Count',
                    data: [{{ $consultationRequestCount }}],
                    backgroundColor: ['#ffcc29']
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Consultation Request Count'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                responsive: false
            }
        });
    </script>
    </body>
    </html>


</x-app-layout>
