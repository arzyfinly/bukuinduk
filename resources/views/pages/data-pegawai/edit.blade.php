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
                        <a href="{{ route('data-pegawai.index') }}">Data Pegawai</a>
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
                            <form action="{{ route('data-pegawai.update', $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $data->nama }}" placeholder="Nama Lengkap">
                                            @error('nama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">NIP</label>
                                            <input type="text" class="form-control" id="nip" name="nip"
                                                value="{{ $data->nip }}" placeholder="NIP">
                                            @error('nip')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik"
                                                value="{{ $data->nik }}" placeholder="NIK">
                                            @error('nik')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nuptk">NUPTK</label>
                                            <input type="text" class="form-control" id="nuptk" name="nuptk"
                                                value="{{ $data->nuptk }}" placeholder="NUPTK">
                                            @error('nuptk')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ $data->email }}" placeholder="Email">
                                            @error('email')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                <option value="">--pilih--</option>
                                                <option value="L" {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                                    Laki-Laki</option>
                                                <option value="P" {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                                    Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                                value="{{ $data->tempat_lahir }}" placeholder="Tempat Lahir">
                                            @error('tempat_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir"
                                                name="tanggal_lahir" value="{{ $data->tanggal_lahir }}"
                                                placeholder="Tanggal Lahir">
                                            @error('tanggal_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jurusan</label>
                                            <select class="form-control" name="jurusan_id" id="jurusan_id">
                                                <option value="">--pilih--</option>
                                                @foreach ($jurusan as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $data->jurusan_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->jurusan }}</option>
                                                @endforeach
                                            </select>
                                            @error('jurusan_id')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jabatan</label>
                                            <select class="form-control" name="posisi_id" id="posisi_id">
                                                <option value="">--pilih--</option>
                                                @foreach ($jabatan as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $data->posisi_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->jabatan }}</option>
                                                @endforeach
                                            </select>
                                            @error('posisi_id')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jenis PNS</label>
                                            <select class="form-control" name="jenis_pns" id="jenis_pns">
                                                <option value="">--pilih--</option>
                                                @foreach ($jenis_pns as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $data->jenis_pns == $item->id ? 'selected' : '' }}>
                                                        {{ $item->jenis_pns }}</option>
                                                @endforeach
                                            </select>
                                            @error('jenis_pns')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TMT Tugas</label>
                                            <input type="date" class="form-control" id="tmt_tugas" name="tmt_tugas"
                                                value="{{ $data->tmt_tugas }}" placeholder="TMT Tugas">
                                            @error('tmt_tugas')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TMT Pangkat</label>
                                            <input type="date" class="form-control" id="tmt_pangkat"
                                                name="tmt_pangkat" value="{{ $data->tmt_pangkat }}"
                                                placeholder="TMT Pangkat">
                                            @error('tmt_pangkat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TMT PNS</label>
                                            <input type="date" class="form-control" id="tmt_pns" name="tmt_pns"
                                                value="{{ $data->tmt_pns }}" placeholder="TMT PNS">
                                            @error('tmt_pns')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('data-pegawai.index') }}" class="btn btn-sm btn-default">
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
