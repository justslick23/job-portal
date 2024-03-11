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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $job['title'] }}</h5>
                                <p class="card-text">{{ $job['company'] }}</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
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
@endsection
