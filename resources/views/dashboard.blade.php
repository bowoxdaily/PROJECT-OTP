@extends('layouts/layoutMaster')

@section('title', 'User Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat datang {{ Auth::user()->name }}! 🎉</h5>
                                <p class="mb-4">Anda telah berhasil masuk sebagai <span class="fw-bold">User</span>. Selamat
                                    menggunakan sistem.</p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Lihat Profil</a>
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
        </div>

        <!-- User Statistics -->
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Aktivitas Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class='bx bx-calendar'></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Login Berhasil</h6>
                                        <small class="text-muted">Anda berhasil login ke sistem</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">2 jam yang lalu</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-edit'></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Profil Diperbarui</h6>
                                        <small class="text-muted">Anda telah memperbarui profil</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">1 hari yang lalu</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title m-0 me-2">Informasi Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-3">
                                <div class="me-4">
                                    <small class="text-muted d-block mb-1">Nama</small>
                                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <div class="me-4">
                                    <small class="text-muted d-block mb-1">Username</small>
                                    <h6 class="mb-0">{{ Auth::user()->username ?? 'Not set' }}</h6>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <div class="me-4">
                                    <small class="text-muted d-block mb-1">Email</small>
                                    <h6 class="mb-0">{{ Auth::user()->email }}</h6>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-4">
                                    <small class="text-muted d-block mb-1">Tanggal Bergabung</small>
                                    <h6 class="mb-0">{{ Auth::user()->created_at->format('d M Y') }}</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
