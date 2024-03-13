@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid mt-4">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <h3 class="text-black">Create New Company</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-3">
                        <form action="{{ route('companies.store') }}" method="POST">
                        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Display success message if available -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="website" name="website">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="contact_number" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" id="contact_number" name="contact_number">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>

                            <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea id="description" name="description"></textarea>
</div>

                            <!-- Add more rows with two inputs each as needed -->
                            <div class="mb-3">
                                <label for="industry" class="form-label">Industry</label>
                                <select class="form-select" id="industry" name="industry">
                                    <option value="">Select Industry</option>
                                    <option value="technology">Technology</option>
                                    <option value="finance">Finance</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="education">Education</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="retail">Retail</option>
                                    <option value="hospitality">Hospitality</option>
                                    <option value="automotive">Automotive</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="real_estate">Real Estate</option>
                                    <!-- Add more options as needed -->
                                </select>                            </div>

                            <div class="mb-3">
        <label for="company_size" class="form-label">Company Size</label>
        <select class="form-control" id="company_size" name="company_size">
        <option value="">Select Company Size</option>
        <option value="1-10">1-10 employees</option>
        <option value="11-50">11-50 employees</option>
        <option value="51-200">51-200 employees</option>
        <!-- Add more options as needed -->
    </select>    
</div>
                            <div class="row mb-3">
                            <div class="col-md-6">
    <label for="country" class="form-label">Country</label>
    <select class="form-select" id="country" name="country">
        <option value="">Select Country</option>
        @php
            $response = file_get_contents('https://restcountries.com/v3.1/all');
            $countries = json_decode($response, true);

            // Sort countries alphabetically by name
            usort($countries, function($a, $b) {
                return strcmp($a['name']['common'], $b['name']['common']);
            });
        @endphp
        @foreach ($countries as $country)
            <option value="{{ $country['name']['common'] }}">{{ $country['name']['common'] }}</option>
        @endforeach
    </select>
</div>


                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city">
                                </div>
                            </div>

                            <div class="row mb-3">
    <div class="col-md-12">
        <label for="logo" class="form-label">Company Logo</label>
        <input type="file" class="form-control" id="logo" required name="logo">
    </div>
</div>

                            <!-- Repeat the same pattern for other inputs -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
@endsection

@push('js')
<script src="https://cdn.tiny.cloud/1/q02rurz1c7ja4zh3z8kki82etyytx1w26aygip2lauxhsl61/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#description',
        height: 300,
        plugins: 'link image code',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright | bullist numlist | link image | code'
    });
</script>

@endpush
