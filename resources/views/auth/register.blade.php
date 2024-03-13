@extends('layouts.app')
@include('pages.nav') <!-- Include the navbar template -->

@section('content')
<section class="hero-section text-center" style="background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8));">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </nav>
            <br><br>
            <!-- Page Title -->
            <h1>Register</h1>
        </div>
    </section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
    <ul class="nav nav-pills  mb-3" id="registerTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ $userType == 'employer' ? 'active' : '' }}" id="employer-tab" data-toggle="pill" href="#employer" role="tab" aria-controls="employer" aria-selected="true">Employer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $userType == 'jobseeker' ? 'active' : '' }}" id="jobseeker-tab" data-toggle="pill" href="#jobseeker" role="tab" aria-controls="jobseeker" aria-selected="false">Job Seeker</a>
        </li>
    </ul>
    <div class="tab-content" id="registerTabsContent">
        <div class="tab-pane fade {{ $userType == 'employer' ? 'show active' : '' }}" id="employer" role="tabpanel" aria-labelledby="employer-tab">
            @include('auth.register-form', ['userType' => 'employer'])
        </div>
        <div class="tab-pane fade {{ $userType == 'jobseeker' ? 'show active' : '' }}" id="jobseeker" role="tabpanel" aria-labelledby="jobseeker-tab">
            @include('auth.register-form', ['userType' => 'jobseeker'])
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Toggle active class when tabs are clicked
        $('#registerTabs .nav-link').on('click', function() {
            $('#registerTabs .nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
@endpush
