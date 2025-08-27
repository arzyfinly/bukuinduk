@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Nilai</h4>
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
                        <a href="{{ route('data-induk.index') }}">Data Induk</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Nilai</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab mt-0 mb-3 ml-3" style="border: none">
                                <div class="nav-wrapper">
                                    <ul class="nav  nav-line nav-color-success flex-column flex-md-row" id="tabs-icons-text"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-2-tab"
                                                data-toggle="tab" href="#tabs-icons-text-2" role="tab"
                                                aria-controls="tabs-icons-text-2" aria-selected="true">Nilai
                                                Pelajaran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                                href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-2"
                                                aria-selected="false">Nilai
                                                Ijazah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab" data-toggle="tab"
                                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                                aria-selected="false">Nilai Sikap</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                                href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                                aria-selected="false">Kehadiran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab"
                                                href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-3"
                                                aria-selected="false">Status Akhir
                                                Tahun</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-2-tab">
                                        <div class="description">
                                            <div class="table-responsive py-4">
                                                <form action="{{ route('data-induk.store-nilai', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <h4 class="page-title">Semester 1</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_1_a_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_1_a_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_1_b_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_1_b_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_1_c_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_1_c_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <h4 class="page-title">Semester 2</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_2_a_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_2_a_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_2_b_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_2_b_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_2_c_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_2_c_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <h4 class="page-title">Semester 3</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_3_a_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_3_a_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_3_b_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_3_b_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_3_c_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_3_c_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <h4 class="page-title">Semester 4</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_4_a_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_4_a_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_4_b_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_4_b_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_4_c_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_4_c_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <h4 class="page-title">Semester 5</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_5_a_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_5_a_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_5_b_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_5_b_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_5_c_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_5_c_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <h4 class="page-title">Semester 6</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_6_a_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_6_a_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_6_b_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        id=""
                                                                        name="sm_6_b_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">PENGETAHUAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_6_c_pengetahuan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_6_c_keterampilan_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{ route('data-induk.index') }}"
                                                            class="btn btn-sm btn-default">
                                                            <span class="btn-label">
                                                                <i class="fa fa-arrow-left"></i>
                                                            </span>
                                                            Kembali
                                                        </a>
                                                        <button class="btn btn-sm btn-success"
                                                            id="save">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-1-tab">
                                        <div class="description">
                                            <div class="table-responsive py-4">
                                                <form action="{{ route('data-induk.store-nilai-ijazah', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <h4 class="page-title">Nilai Ijazah</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_ijazah_a_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_ijazah_b_{{ $item->nama }}"
                                                                        value="" placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{ route('data-induk.index') }}"
                                                            class="btn btn-sm btn-default">
                                                            <span class="btn-label">
                                                                <i class="fa fa-arrow-left"></i>
                                                            </span>
                                                            Kembali
                                                        </a>
                                                        <button type="submit" class="btn btn-sm btn-success"
                                                            id="save">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-1-tab">
                                        <div class="description">
                                            <div class="table-responsive py-4">
                                                <form action="{{ route('data-induk.store-sikap', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <h4 class="page-title">Nilai Sikap</h4>
                                                    <hr>
                                                    <h5><u><b>Semester 1</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_1_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_1_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 2</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_2_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_2_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 3</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_3_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_3_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 4</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_4_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_4_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 5</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_5_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_5_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 6</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_6_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control" value="-"
                                                                    name="sm_6_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{ route('data-induk.index') }}"
                                                            class="btn btn-sm btn-default">
                                                            <span class="btn-label">
                                                                <i class="fa fa-arrow-left"></i>
                                                            </span>
                                                            Kembali
                                                        </a>
                                                        <button type="submit" class="btn btn-sm btn-success"
                                                            id="save">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-3-tab">
                                        <div class="description">
                                            <div class="table-responsive py-4">
                                                <form action="{{ route('data-induk.store-kehadiran', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <h4 class="page-title">Nilai Kehadiran</h4>
                                                    <hr>
                                                    <h5><u><b>Semester 1</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_1_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_1_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_1_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 2</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_2_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_2_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_2_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 3</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_3_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_3_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_3_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 4</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_4_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_4_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_4_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 5</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_5_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_5_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_5_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 6</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_6_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_6_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control" value="0"
                                                                    name="sm_6_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{ route('data-induk.index') }}"
                                                            class="btn btn-sm btn-default">
                                                            <span class="btn-label">
                                                                <i class="fa fa-arrow-left"></i>
                                                            </span>
                                                            Kembali
                                                        </a>
                                                        <button class="btn btn-sm btn-success"
                                                            id="save">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-4-tab">
                                        <div class="description">
                                            <div class="table-responsive py-4">
                                                <form action="{{ route('data-induk.store-status-akhir', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <h4 class="page-title">Status Akhir Tahun</h4>
                                                    <hr>
                                                    <h5><u><b>Kelas 7</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-12 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Naik/Tinggal Kelas</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_kelas_7"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Kelas 8</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-12 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Naik/Tinggal Kelas</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_kelas_8"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Kelas 9</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-12 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Naik/Tinggal Kelas</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_kelas_9"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h5><u><b>Status Akhir</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-12 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>LULUS/TIDAK LULUS</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_akhir" placeholder="Contoh: LULUS">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{ route('data-induk.index') }}"
                                                            class="btn btn-sm btn-default">
                                                            <span class="btn-label">
                                                                <i class="fa fa-arrow-left"></i>
                                                            </span>
                                                            Kembali
                                                        </a>
                                                        <button class="btn btn-sm btn-success"
                                                            id="save">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(window).on('load', function() {
            Swal.fire({
                icon: 'warning',
                title: 'Perhatian!',
                text: 'Harap mengisi Nilai Pelajaran terlebih dahulu!',
            })
        });
    </script>
@endsection
