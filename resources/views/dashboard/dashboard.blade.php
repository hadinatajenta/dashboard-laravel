@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        {{-- Overview --}}
        <div class="row">
            <div class="col">
                <div class="card p-4 bdr"
                    style="background-image: linear-gradient(to right, #8a8cf7, #8183f6, #7779f4, #6d70f3, #6366f1); ">
                    <div class="d-flex align-items-center">
                        <i class='bx bx-wallet-alt rounded-circle  p-2 text-white' style="background: #9c9df8"></i>
                        &nbsp;
                        <p class="mb-0  text-white text-bold">Total balance</p>
                    </div>
                    <p class="text-white mb-0 mt-2 h4">$69,696</p>
                </div>
            </div>
            <div class="col">
                <div class="card p-4  bdr" >
                    <div class="d-flex align-items-center">
                        <i class='bx bxs-dollar-circle rounded-circle  p-2 '
                            style="background: #f2f6ff; color:#5c5ff1;"></i>
                        &nbsp;
                        <p class="mb-0  text-bold">Total Lonte</p>
                    </div>
                    <p class="mb-0 mt-2 h4">$12,345</p>
                </div>
            </div>
            <div class="col">
                <div class="card p-4   bdr  " >
                    <div class="d-flex align-items-center">
                        <i class='bx bxs-dollar-circle rounded-circle  p-2 '
                            style="background: #fef2f2; color:#ef4444;"></i>
                        &nbsp;
                        <p class="mb-0  text-bold">Total Mppsh</p>
                    </div>
                    <p class="mb-0 mt-2 h4">$11,655</p>
                </div>
            </div>
            <div class="col">
                <div class="card p-4    bdr " >
                    <div class="d-flex align-items-center">
                        <i class='bx bx-cart-download rounded-circle  p-2 ' style="background: #f3f4f6; color:#5f6675;"></i>
                        &nbsp;
                        <p class="mb-0  text-bold">Total Barang</p>
                    </div>
                    <p class="mb-0 mt-2 h4">123</p>
                </div>
            </div>

        </div>

        <div class="row my-4">
            {{-- Left side --}}
            <div class="col-8">
                <div class="card border-0">
                    {{-- Card header --}}
                    <div class="card-header rounded-top border-bottom-0" style="background-color: #f6f6f6">
                        <p class="fw-bold mb-0" style="color: #494f5d">Sales Performance</p>
                    </div>
                    {{-- Card body --}}
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    <i class='bx bxs-circle' style="color: #6164f1"></i>
                                    <p class="ms-2  mb-0 text-secondary">Total Revenue</p>
                                </div>
                                <p class="fw-bold h4">$12,345</p>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    <i class='bx bxs-circle' style="color: #f44b1e"></i>
                                    <p class="ms-2  mb-0 text-secondary">Total Target</p>
                                </div>
                                <p class="fw-bold h4">$10,666</p>
                            </div>
                        </div>
                    </div>

                    {{-- Charts --}}
                    <canvas id="myChart" width="400" height="200" class="p-3"></canvas>
                </div>
            </div>

            {{-- Right side --}}
            <div class="col-4">
                <div class="card  border-0">
                    <div class="card-header border-bottom-0">
                        <p class="fw-bold mb-0" style="color: #494f5d">Revenue Categories</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <canvas id="donutChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                        label: 'Revenue',
                        data: [12000, 19000, 3000, 50000, 20000, 30000, 70000],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Expenses',
                        data: [8000, 15000, 20000, 35000, 25000, 40000, 80000],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                }
            }
        });
        const mmx = document.getElementById('donutChart').getContext('2d');
        const donutChart = new Chart(mmx, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Black'],
                datasets: [{
                    label: 'Dataset 1',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(201, 203, 207)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                cutoutPercentage: 60,
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true
                    },
                    title: {
                        display: true,
                        text: '81% Total'
                    }
                }
            }
        });
    </script>
    --}}
@endsection
