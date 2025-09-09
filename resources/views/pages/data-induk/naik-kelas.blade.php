@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Naik/Pindah Kelas</h4>
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
                        <a href="#">Naik/Pindah Kelas</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mt--2 mb-0">
                                    <form action="{{ route('naik-kelas.index') }}" method="GET">
                                        <div class="form-group">
                                            <label for="kelas">Kelas</label>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <select name="kelas" id="kelas" class="form-control">
                                                        <option value="">--pilih--</option>
                                                        <option value="Kelas 7-1" @selected($kelas == 'Kelas 7-1')>Kelas 7-1
                                                        </option>
                                                        <option value="Kelas 7-2" @selected($kelas == 'Kelas 7-2')>Kelas 7-2
                                                        </option>
                                                        <option value="Kelas 7-3" @selected($kelas == 'Kelas 7-3')>Kelas 7-3
                                                        </option>
                                                        <option value="Kelas 7-4" @selected($kelas == 'Kelas 7-4')>Kelas 7-4
                                                        </option>
                                                        <option value="Kelas 7-5" @selected($kelas == 'Kelas 7-5')>Kelas 7-5
                                                        </option>
                                                        <option value="Kelas 7-6" @selected($kelas == 'Kelas 7-6')>Kelas 7-6
                                                        </option>
                                                        <option value="Kelas 7-7" @selected($kelas == 'Kelas 7-7')>Kelas 7-7
                                                        </option>
                                                        <option value="Kelas 7-8" @selected($kelas == 'Kelas 7-8')>Kelas 7-8
                                                        </option>
                                                        <option value="Kelas 7-9" @selected($kelas == 'Kelas 7-9')>Kelas 7-9
                                                        </option>
                                                        <option value="Kelas 7-10" @selected($kelas == 'Kelas 7-10')>Kelas 7-10
                                                        </option>
                                                        <option value="Kelas 8-1" @selected($kelas == 'Kelas 8-1')>Kelas 8-1
                                                        </option>
                                                        <option value="Kelas 8-2" @selected($kelas == 'Kelas 8-2')>Kelas 8-2
                                                        </option>
                                                        <option value="Kelas 8-3" @selected($kelas == 'Kelas 8-3')>Kelas 8-3
                                                        </option>
                                                        <option value="Kelas 8-4" @selected($kelas == 'Kelas 8-4')>Kelas 8-4
                                                        </option>
                                                        <option value="Kelas 8-5" @selected($kelas == 'Kelas 8-5')>Kelas 8-5
                                                        </option>
                                                        <option value="Kelas 8-6" @selected($kelas == 'Kelas 8-6')>Kelas 8-6
                                                        </option>
                                                        <option value="Kelas 8-7" @selected($kelas == 'Kelas 8-7')>Kelas 8-7
                                                        </option>
                                                        <option value="Kelas 8-8" @selected($kelas == 'Kelas 8-8')>Kelas 8-8
                                                        </option>
                                                        <option value="Kelas 8-9" @selected($kelas == 'Kelas 8-9')>Kelas 8-9
                                                        </option>
                                                        <option value="Kelas 8-10" @selected($kelas == 'Kelas 8-10')>Kelas 8-10
                                                        </option>
                                                        <option value="Kelas 9-1" @selected($kelas == 'Kelas 9-1')>Kelas 9-1
                                                        </option>
                                                        <option value="Kelas 9-2" @selected($kelas == 'Kelas 9-2')>Kelas 9-2
                                                        </option>
                                                        <option value="Kelas 9-3" @selected($kelas == 'Kelas 9-3')>Kelas 9-3
                                                        </option>
                                                        <option value="Kelas 9-4" @selected($kelas == 'Kelas 9-4')>Kelas 9-4
                                                        </option>
                                                        <option value="Kelas 9-5" @selected($kelas == 'Kelas 9-5')>Kelas 9-5
                                                        </option>
                                                        <option value="Kelas 9-6" @selected($kelas == 'Kelas 9-6')>Kelas 9-6
                                                        </option>
                                                        <option value="Kelas 9-7" @selected($kelas == 'Kelas 9-7')>Kelas 9-7
                                                        </option>
                                                        <option value="Kelas 9-8" @selected($kelas == 'Kelas 9-8')>Kelas 9-8
                                                        </option>
                                                        <option value="Kelas 9-9" @selected($kelas == 'Kelas 9-9')>Kelas 9-9
                                                        </option>
                                                        <option value="Kelas 9-10" @selected($kelas == 'Kelas 9-10')>Kelas 9-10
                                                        </option>
                                                    </select>
                                                    @error('kelas')
                                                        <small class="text-danger" role="alert">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-2">
                                                    <button class="btn btn-sm btn-success" id="save">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('naik-kelas.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="col-12">
                                                @if (session('success'))
                                                    <div class="alert alert-success" role="alert">{{ session('success') }}
                                                    </div>
                                                @endif

                                                @if (session('error'))
                                                    <div class="alert alert-danger" role="alert">{{ session('error') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="name">Kelas Tujuan</label>
                                                <select class="form-control" name="kelas_tujuan" id="kelas_tujuan">
                                                    <option value="">--pilih--</option>
                                                    <option value="Kelas 7-1">Kelas 7-1</option>
                                                    <option value="Kelas 7-2">Kelas 7-2</option>
                                                    <option value="Kelas 7-3">Kelas 7-3</option>
                                                    <option value="Kelas 7-4">Kelas 7-4</option>
                                                    <option value="Kelas 7-5">Kelas 7-5</option>
                                                    <option value="Kelas 7-6">Kelas 7-6</option>
                                                    <option value="Kelas 7-7">Kelas 7-7</option>
                                                    <option value="Kelas 7-8">Kelas 7-8</option>
                                                    <option value="Kelas 7-9">Kelas 7-9</option>
                                                    <option value="Kelas 7-10">Kelas 7-10</option>
                                                    <option value="Kelas 8-1">Kelas 8-1</option>
                                                    <option value="Kelas 8-2">Kelas 8-2</option>
                                                    <option value="Kelas 8-3">Kelas 8-3</option>
                                                    <option value="Kelas 8-4">Kelas 8-4</option>
                                                    <option value="Kelas 8-5">Kelas 8-5</option>
                                                    <option value="Kelas 8-6">Kelas 8-6</option>
                                                    <option value="Kelas 8-7">Kelas 8-7</option>
                                                    <option value="Kelas 8-8">Kelas 8-8</option>
                                                    <option value="Kelas 8-9">Kelas 8-9</option>
                                                    <option value="Kelas 8-10">Kelas 8-10</option>
                                                    <option value="Kelas 9-1">Kelas 9-1</option>
                                                    <option value="Kelas 9-2">Kelas 9-2</option>
                                                    <option value="Kelas 9-3">Kelas 9-3</option>
                                                    <option value="Kelas 9-4">Kelas 9-4</option>
                                                    <option value="Kelas 9-5">Kelas 9-5</option>
                                                    <option value="Kelas 9-6">Kelas 9-6</option>
                                                    <option value="Kelas 9-7">Kelas 9-7</option>
                                                    <option value="Kelas 9-8">Kelas 9-8</option>
                                                    <option value="Kelas 9-9">Kelas 9-9</option>
                                                    <option value="Kelas 9-10">Kelas 9-10</option>
                                                    <option value="lulus">Lulus</option>
                                                    <option value="keluar">Keluar</option>
                                                </select>
                                                @error('kelas_tujuan')
                                                    <small class="text-danger" role="alert">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt--2 mb-0">
                                            <div class="form-group">
                                                <label class="form-label">Pilih Semua Siswa</label>
                                                <div class="row gutters-xs">
                                                    <div class="col-auto">
                                                        <label class="colorinput">
                                                            <input type="checkbox" id="check-all-siswa"
                                                                class="colorinput-input">
                                                            <span class="colorinput-color bg-success"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt--2 mb-0">
                                            <div class="form-group">
                                                <label>Daftar Siswa : <span
                                                        class="text-success">{{ $kelas }}</span></label>
                                                @error('siswa')
                                                    <small class="text-danger" role="alert">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        @forelse ($siswa as $item)
                                            <div class="col-lg-4 col-md-6 mb-0">
                                                <div class="form-group">
                                                    <div class="d-flex align-items-center">
                                                        <label class="colorinput">
                                                            <input type="checkbox" name="siswa[]"
                                                                value="{{ $item->id }}" id="siswa_{{ $item->id }}"
                                                                class="colorinput-input siswa">
                                                            <span class="colorinput-color bg-success"></span>
                                                        </label>
                                                        <div class="form-group mb-0">
                                                            <label
                                                                for="siswa_{{ $item->id }}">{{ $item->nama }}</label>
                                                            @error('siswa')
                                                                <small class="text-danger" role="alert">
                                                                    {{ $message }}
                                                                </small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-lg-12">
                                                <h5 class="text-center text-muted">Data siswa tidak ditemukan</h5>
                                            </div>
                                        @endforelse
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-sm btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            $(document).ready(function() {
                $('#check-all-siswa').click(function(event) {
                    if (this.checked) {
                        $(".siswa").attr("checked", true);
                    } else {
                        $(".siswa").attr("checked", false);
                    }
                });
            })
        </script>
    @endsection
@endsection
