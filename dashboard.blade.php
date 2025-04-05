<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <div style="padding: 50px">
                        <canvas id="myChart" width="400" height="120"></canvas>
                    </div>
                    <script>
                        const ctx = document.getElementById('myChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Pages', 'Contact Messages', 'Subscribers', 'Opening Hours', 'Sliders', 'Supporting Orgs', 'Job Applications'],
                                datasets: [{
                                    label: 'Data statistics',
                                    data: [{{ $dataCounts['pages'] }}, {{ $dataCounts['contactus'] }}, {{ $dataCounts['subscribers'] }}, {{ $dataCounts['opening_hours'] }}, {{ $dataCounts['sliders'] }}, {{ $dataCounts['supporting_orgs'] }}, {{ $dataCounts['job_applications'] }}],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(201, 203, 207, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                   </div>
            </div>

        </div>
    </div>
</x-app-layout>
