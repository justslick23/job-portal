@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                <div class="card  shadow-lg border-0">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-black">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Applications</p>
                                    <h5 class="font-weight-bolder">
                                        150 <!-- Dummy total applications data -->
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+10%</span>
                                        since last month
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow-primary text-center rounded-circle">
                                    <i class="ni ni-badge text-lg opacity-10 text-primary" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Similarly, update the design for total jobs and total companies here -->
            <!-- For example -->
            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                <div class="card bg-gradient-danger shadow-lg border-0">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-white">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Jobs</p>
                                    <h5 class="font-weight-bolder">
                                        75 <!-- Dummy total jobs data -->
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                        since last week
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow-danger text-center rounded-circle">
                                    <i class="ni ni-book-bookmark text-lg opacity-10 text-danger" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                <div class="card bg-gradient-danger shadow-lg border-0">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-white">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Companies</p>
                                    <h5 class="font-weight-bolder">
                                        75 <!-- Dummy total jobs data -->
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                        since last week
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow-danger text-center rounded-circle">
                                    <i class="ni ni-book-bookmark text-lg opacity-10 text-danger" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add card for total companies here -->
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Job Search Trends</h6>
                    </div>
                    <div class="card-body p-3">
                        <canvas id="jobSearchTrendsChart" class="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add chart for job applications here -->

        <!-- Add separate tables for recent jobs and recent applications -->
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Recent Jobs</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Job Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Dummy recent jobs data -->
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-sm">Web Developer</h6>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">2024-03-10</span>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">Open</span>
                                        </td>
                                    </tr>
                                    <!-- Add more rows with dummy data as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Recent Applications</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Applicant Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Dummy recent applications data -->
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-sm">John Doe</h6>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">2024-03-09</span>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">Pending</span>
                                        </td>
                                    </tr>
                                    <!-- Add more rows with dummy data as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dummy data for the chart
        const jobSearchTrendsData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: 'Job Applications',
                    data: [30, 45, 60, 55, 70, 75, 80], // Dummy data for job applications
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
        };

        // Chart configuration
        const jobSearchTrendsConfig = {
            type: 'line',
            data: jobSearchTrendsData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Create the chart
        var jobSearchTrendsChart = new Chart(
            document.getElementById('jobSearchTrendsChart'),
            jobSearchTrendsConfig
        );
    </script>
@endpush
