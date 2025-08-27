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
                        <a href="{{ route('mapel.index') }}">Mapel</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="kelompok">Kelompok</label>
                                            <select name="kelompok" id="kelompok" class="form-control">
                                                <option value="">--pilih--</option>
                                                <option value="A" {{ $mapel->kelompok == 'A' ? 'selected' : '' }}>A
                                                </option>
                                                <option value="B" {{ $mapel->kelompok == 'B' ? 'selected' : '' }}>B
                                                </option>
                                                <option value="EKTRAKURIKULER"
                                                    {{ $mapel->kelompok == 'EKTRAKURIKULER' ? 'selected' : '' }}>
                                                    EKTRAKURIKULER</option>
                                            </select>
                                            @error('nama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $mapel->nama }}" placeholder="Nama" disabled>
                                            @error('nama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('mapel.index') }}" class="btn btn-sm btn-default">
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
