@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah</h4>
                <ul class="breadcrumbs ml-2">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Profile</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('post-profile') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="password">Email</label>
                                            <input type="email" value="{{ $user->email }}" class="form-control"
                                                id="email" name="email" placeholder="@example.com">
                                            @error('email')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="password">Password Lama</label>
                                            <input type="password" class="form-control" id="old_password"
                                                name="old_password" placeholder="********">
                                            @error('old_password')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="password">Password Baru</label>
                                            <input type="password" class="form-control" id="new_password"
                                                name="new_password" placeholder="********">
                                            @error('new_password')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="password">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="confirm_password"
                                                name="confirm_password" placeholder="********">
                                            @error('confirm_password')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="/home" class="btn btn-sm btn-default">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Kembali
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
