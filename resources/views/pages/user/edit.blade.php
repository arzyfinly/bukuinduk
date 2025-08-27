@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit</h4>
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
                        <a href="#">Master</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('agama.index') }}">Agama</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="name">Username</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $user->name }}" placeholder="Username">
                                            @error('name')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $user->email }}" placeholder="Email">
                                            @error('email')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                value="{{ old('password') }}" placeholder="Password">
                                            @error('password')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="confirm_password">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="confirm_password"
                                                name="confirm_password" placeholder="Konfirmasi Password">
                                            @error('confirm_password')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-default">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Kembali
                                    </a>
                                    <button class="btn btn-sm btn-success" id="save">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
