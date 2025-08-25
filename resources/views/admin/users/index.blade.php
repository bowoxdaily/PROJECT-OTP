@extends('layouts/layoutMaster')

@section('title', 'Daftar Pengguna')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable();
        });
    </script>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Admin /</span> Daftar Pengguna
        </h4>

        <!-- Users List Table -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Semua Pengguna</h5>
                <a href="javascript:void(0);" class="btn btn-primary">
                    <i class="bx bx-plus me-0 me-sm-1"></i>
                    <span class="d-none d-sm-inline-block">Tambah Pengguna Baru</span>
                </a>
            </div>
            <div class="card-datatable table-responsive">
                <table class="table border-top" id="users-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Tanggal Registrasi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username ?? 'N/A' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge bg-label-{{ $user->role == 'admin' ? 'primary' : 'success' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-label-success">Active</span>
                                </td>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
