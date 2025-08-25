@extends('layouts/layoutMaster')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome Admin {{ Auth::user()->name }}! 🎉</h5>
                                <p class="mb-4">Anda telah masuk sebagai <span class="fw-bold">Admin</span>. Anda dapat
                                    mengelola seluruh sistem.</p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Kelola Pengguna</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                    alt="View Badge User">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Statistics -->
            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                    class="rounded">
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Pengguna</span>
                        <h3 class="card-title mb-2">12,628</h3>
                        <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +72.80%</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded">
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Transaksi</span>
                        <h3 class="card-title mb-2">$14,857</h3>
                        <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="Credit Card"
                                    class="rounded">
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Pendapatan</span>
                        <h3 class="card-title mb-2">$4,679</h3>
                        <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Pengguna -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Daftar Pengguna Terbaru</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>1</td>
                                    <td>Albert Cook</td>
                                    <td>albert</td>
                                    <td>albert@example.com</td>
                                    <td><span class="badge bg-label-primary me-1">Admin</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Barry Allen</td>
                                    <td>barry</td>
                                    <td>barry@example.com</td>
                                    <td><span class="badge bg-label-success me-1">User</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
