@extends('layouts.app')
@section('content')
    <section class="pt-30 pl-5 lg:pr-10 pr-5">
        <!-- Top Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            @foreach (range(1, 4) as $i)
                <div
                    class="flex items-center cursor-pointer justify-center space-x-5 border border-purple-100 py-10 rounded-md shadow">
                    <div class="bg-purple-600 px-3.5 py-3 rounded-md text-white">
                        <i class="fa-solid fa-users text-xl"></i>
                    </div>
                    <div>
                        <p class="text-3xl font-bold">3,256</p>
                        <h4 class="text-gray-500 text-md mt-1">Card {{ $i }} Title</h4>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Charts and Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-6 mb-6">
            <!-- Bar Chart -->
            <div class="bg-white p-5 rounded-xl shadow border border-purple-100 col-span-2">
                <h4 class="text-gray-600 font-semibold mb-4">Outpatients vs. Inpatients Trend</h4>
                <div class="h-64">
                    <canvas id="bar_chart" class="w-full h-full"></canvas>
                </div>
            </div>
            <!-- Donut Placeholder -->
            <div class="bg-white p-5 rounded-xl shadow border mt-5 lg:mt-0 border-purple-100">
                <h4 class="text-gray-600 font-semibold mb-4">Patients by Gender</h4>
                <div class="h-64">
                    <canvas id="donut_chart" class="w-full h-full"></canvas>
                </div>
            </div>
        </div>

        <!-- Lower Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-xl shadow border border-purple-100">
                <h4 class="text-gray-600 font-semibold mb-4">Patients By Division</h4>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Google Pixel Phone
                                </th>
                                <td class="px-6 py-4">
                                    Gray
                                </td>
                                <td class="px-6 py-4">
                                    Phone
                                </td>
                                <td class="px-6 py-4">
                                    $799
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Apple Watch 5
                                </th>
                                <td class="px-6 py-4">
                                    Red
                                </td>
                                <td class="px-6 py-4">
                                    Wearables
                                </td>
                                <td class="px-6 py-4">
                                    $999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="bg-white p-5 rounded-xl shadow border border-purple-100">
                <h4 class="text-gray-600 font-semibold mb-4">Time Admitted</h4>
                <div class="h-64">
                    <canvas id="line_chart" class="w-full h-full"></canvas>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('bar_chart');
            if (ctx) {
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Oct 2019', 'Nov 2019', 'Dec 2019', 'Jan 2020', 'Feb 2020', 'Mar 2020'],
                        datasets: [{
                                label: 'Outpatients',
                                data: [1800, 2200, 4500, 1700, 3200, 3500],
                                backgroundColor: 'rgba(34, 197, 94, 0.7)', // Green
                                borderRadius: 4,
                                barPercentage: 0.5
                            },
                            {
                                label: 'Inpatients',
                                data: [3000, 3200, 4700, 2900, 3500, 4100],
                                backgroundColor: 'rgba(139, 92, 246, 0.8)', // Purple
                                borderRadius: 4,
                                barPercentage: 0.5
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                                labels: {
                                    boxWidth: 12,
                                    padding: 20
                                }
                            },
                            tooltip: {
                                mode: 'index',
                                intersect: false
                            }
                        },
                        scales: {
                            x: {
                                grid: {
                                    display: false
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1000,
                                    callback: value => value.toLocaleString()
                                }
                            }
                        }
                    }
                });
            } else {
                console.error('Canvas element #bar_chart not found!');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('donut_chart');
            if (ctx) {
                const total = 60 + 40;

                // Custom plugin for center text
                const centerTextPlugin = {
                    id: 'centerText',
                    beforeDraw(chart) {
                        const {
                            width,
                            height,
                            ctx
                        } = chart;
                        ctx.save();
                        const fontSize = (height / 150).toFixed(2);
                        ctx.font = `${fontSize}em sans-serif`;
                        ctx.fillStyle = '#374151';
                        ctx.textBaseline = 'middle';

                        const text = total.toString();
                        const textX = Math.round((width - ctx.measureText(text).width) / 2);
                        const textY = height / 2.30;

                        ctx.fillText(text, textX, textY);
                        ctx.restore();
                    }
                };

                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Male', 'Female'],
                        datasets: [{
                            data: [60, 40],
                            backgroundColor: ['rgba(34, 197, 94, 0.7)', 'rgba(139, 92, 246, 0.8)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    boxWidth: 12,
                                    padding: 20
                                }
                            }
                        }
                    },
                    plugins: [centerTextPlugin]
                });
            } else {
                console.error('Canvas element #donut_chart not found!');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('line_chart');

            if (ctx) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                        datasets: [{
                                label: 'Income',
                                data: [15000, 18000, 23000, 5000, 28000, 32000, 39000],
                                fill: true,
                                backgroundColor: 'rgba(94, 234, 212, 0.2)', // teal-300 bg
                                borderColor: 'rgba(45, 212, 191, 1)', // teal-400 line
                                tension: 0.4,
                                pointRadius: 0,
                                borderWidth: 2,
                            },
                            {
                                label: 'Expense',
                                data: [10000, 12000, 17000, 14000, 19000, 21000, 23000],
                                fill: true,
                                backgroundColor: 'rgba(251, 207, 232, 0.2)', // pink-200 bg
                                borderColor: 'rgba(244, 114, 182, 1)', // pink-400 line
                                tension: 0.4,
                                pointRadius: 0,
                                borderWidth: 2,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                                align: 'end',
                                labels: {
                                    usePointStyle: true,
                                    pointStyle: 'circle',
                                    padding: 20,
                                    boxWidth: 10,
                                    color: '#4B5563' // gray-600
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        return `${context.dataset.label}: $${context.parsed.y.toLocaleString()}`;
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return '$' + (value / 1000) + 'k';
                                    }
                                },
                                grid: {
                                    color: '#E5E7EB' // Tailwind gray-200
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        }
                    }
                });
            } else {
                console.error('Canvas element #line_chart not found!');
            }
        });
    </script>
@endpush
