@extends('layouts/layoutMaster')

@section('title', 'User Profile')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Detail Profil</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="user-avatar" class="d-block rounded"
                                height="100" width="100" id="uploadedAvatar">
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload foto baru</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                        accept="image/png, image/jpeg">
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('user-profile-information.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ Auth::user()->name }}" autofocus>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" type="text" name="username" id="username"
                                        value="{{ Auth::user()->username ?? '' }}">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ Auth::user()->email }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">ID (+62)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="202 555 0111">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">Ubah Password</h5>
                    <div class="card-body">
                        <form id="formAccountDeactivation" method="POST" action="{{ route('user-password.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 col-md-6">
                                <label for="current_password" class="form-label">Password Saat Ini</label>
                                <input class="form-control" type="password" id="current_password" name="current_password">
                                @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="password" class="form-label">Password Baru</label>
                                <input class="form-control" type="password" id="password" name="password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                <input class="form-control" type="password" id="password_confirmation"
                                    name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
