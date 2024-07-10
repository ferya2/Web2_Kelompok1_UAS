@extends('layouts.home.app')

@section('title', 'Hasil Voting')

@section('content')

    <div class="container">
        <h1 class="my-4">Hasil Voting</h1>

        <!-- Pie Chart Hasil Voting -->
        <h2>Pie Chart Hasil Voting</h2>
        <div>
            <canvas id="votePieChart"></canvas>
        </div>
        <!-- Tabel Hasil Voting -->
        <h2 class="mb-3">Tabel Hasil Voting</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Paslon</th>
                    <th>Jumlah Vote</th>
                    <th>Persentase</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>{{ $result['paslon']->nama }}</td>
                        <td>{{ $result['paslon']->jumlahvote }}</td>
                        <td>{{ number_format($result['percentage'], 2) }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('votePieChart').getContext('2d');
            var data = {
                labels: @json($results->pluck('paslon.nama')),
                datasets: [{
                    data: @json($results->pluck('percentage')),
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40'
                    ],
                }]
            };
            var options = {
                responsive: true,
                maintainAspectRatio: false,
            };
            var votePieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
        });
    </script>

@endsection
