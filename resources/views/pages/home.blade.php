<!-- resources/views/home.blade.php -->

@extends('layouts.app')
@include('pages.nav') <!-- Include the navbar template -->

@section('content')
    <!-- Hero section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 style = "color: #1768AC; font-weight: 800;" >Welcome to the Job Board Portal</h1>
                    <p>Find your dream job or hire the best talent.</p>
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <!-- Search form -->
                            <form action="#" method="GET" class="form-inline">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="height: 38px;"><i class="fa fa-search" style="font-size: 20px;"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="query" placeholder="Job/Company Name" style="height: 38px;">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="height: 38px;"><i class="fa fa-map-marker" style="font-size: 20px;"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="location" placeholder="Location" style="height: 38px;">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary btn-block" style="height: 38px;">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Additional column with image -->
                <div class="col-lg-6">
    <img src="{{ asset('img/home.jpg') }}" alt="Image" class="img-fluid" style="width: 100%; height: auto;">
</div>

            </div>
        </div>
    </section>

    <!-- Featured jobs section -->
    <section class="featured-jobs-section">
        <div class="container">
            <h2>Featured Jobs</h2>
            <div class="row">
                <!-- Dummy featured job listings -->
                @foreach ($featuredJobs as $job)
                <div class="card mb-4">
        <!-- Company logo -->
        <img src="{{ $job['company_logo'] }}" class="card-img-top" alt="Company Logo">
        <div class="card-body">
            <!-- Job title -->
            <h5 class="card-title">{{ $job['title'] }}</h5>
            <!-- Location -->
            <p class="card-text">Location: {{ $job['location'] }}</p>
            <!-- Salary -->
            <p class="card-text">Salary: {{ $job['salary'] }}</p>
            <!-- Freelance/Fulltime badge -->
            <span class="custom-badge">{{ $job['type'] }}</span>
            <!-- Button to view details -->
            <a href="#" style = "text-align: left" class="btn btn-primary mt-2">View Details</a>
        </div>
    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Categories section -->
    <section class="categories-section">
        <div class="container">
            <h2>Popular Categories</h2>
            <div class="row">
                <!-- Dummy popular job categories -->
                @foreach ($popularCategories as $category)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category }}</h5>
                                <a href="#" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="how-it-works-section">
    <div class="container">
        <h2 class="text-center mb-5">How It Works</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="step">
                    <h3>Browse Jobs</h3>
                    <p>Explore a wide range of job opportunities from various companies.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="step">
                    <h3>Apply for Jobs</h3>
                    <p>Apply for your desired jobs directly through our platform.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="step">
                    <h3>Connect with Companies</h3>
                    <p>Connect with companies and hiring managers to expand your network.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="step">
                    <h3>Find Talent</h3>
                    <p>Post job listings and find the perfect candidates for your company.</p>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
