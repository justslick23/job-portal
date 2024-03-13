@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <h3 class="text-black">Company List</h3>
                            </div>
                            <div class="col text-end">
                            <a href="{{ route('companies.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> New Company</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-3">
                        <div class="table-responsive">
                            <table id="company-table" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Website</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                        <!-- Add more table headers as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td class="mb-0 text-sm">{{ $company->name }}</td>
                                            <td class="mb-0 text-sm">{{ $company->website }}</td>
                                            <td class="mb-0 text-sm">{{ $company->email }}</td>
                                            <td class="mb-0 text-sm">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <form action="#" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                            <!-- Add more table cells for other company properties -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')

    @push('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#company-table').DataTable();
        });
    </script>
    @endpush
@endsection
