@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Nilai</h4>
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
                        <a href="#">Edit Nilai</a>
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
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_1_spiritual'] }}"
                                                                    name="sm_1_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_1_sosial'] }}" name="sm_1_sosial"
                                                                    placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 2</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_2_spiritual'] }}"
                                                                    name="sm_2_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_2_sosial'] }}" name="sm_2_sosial"
                                                                    placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 3</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_3_spiritual'] }}"
                                                                    name="sm_3_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_3_sosial'] }}" name="sm_3_sosial"
                                                                    placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 4</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_4_spiritual'] }}"
                                                                    name="sm_4_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_4_sosial'] }}" name="sm_4_sosial"
                                                                    placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 5</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_5_spiritual'] }}"
                                                                    name="sm_5_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_5_sosial'] }}"
                                                                    name="sm_5_sosial" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 6</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SPIRITUAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_6_spiritual'] }}"
                                                                    name="sm_6_spiritual" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SIKAP SOSIAL</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $sikap['sm_6_sosial'] }}"
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
                                                        <button class="btn btn-sm btn-success"
                                                            id="save">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
                                                                        value="{{ $nilai['semester_1']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_1_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_1_a_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_1']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_1_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_1_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_1_b_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_1_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_1_b_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_1_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
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
                                                                        value="{{ $nilai['semester_1']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_1_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_1_c_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_1']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_1_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
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
                                                                        value="{{ $nilai['semester_2']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_2_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_2_a_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_2']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_2_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_2_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_2_b_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_2_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_2_b_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_2_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
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
                                                                        value="{{ $nilai['semester_2']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_2_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_2_c_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_2']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_2_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
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
                                                                        value="{{ $nilai['semester_3']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_3_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_3_a_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_3']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_3_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_3_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_3_b_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_3_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_3_b_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_3_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
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
                                                                        value="{{ $nilai['semester_3']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_3_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_3_c_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_3']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_3_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
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
                                                                        value="{{ $nilai['semester_4']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_4_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_4_a_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_4']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_4_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_4_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_4_b_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_4_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_4_b_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_4_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
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
                                                                        value="{{ $nilai['semester_4']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_4_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_4_c_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_4']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_4_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <h4 class="page-title">Semester 5</h4>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'A') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_5_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            name="sm_5_a_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_5_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            name="sm_5_a_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_5_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_5_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_5_b_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_5_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_5_b_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_5_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
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
                                                                        value="{{ $nilai['semester_5']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_5_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_5_c_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_5']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_5_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
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
                                                                        value="{{ $nilai['semester_6']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_6_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="number" class="form-control"
                                                                        name="sm_6_a_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_6']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_6_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset(
                                                                    $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 2][
                                                                        'sm_6_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')
                                                                    ]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">PENGETAHUAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_6_b_pengetahuan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_6_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">KETERAMPILAN
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            id=""
                                                                            name="sm_6_b_keterampilan_{{ $item->nama }}"
                                                                            value="{{ $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_6_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
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
                                                            @endif
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
                                                                        value="{{ $nilai['semester_6']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_6_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt--2 mb-0">
                                                                <div class="form-group">
                                                                    <label for="agama">KETERAMPILAN
                                                                        {{ $item->nama }}</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        name="sm_6_c_keterampilan_{{ $item->nama }}"
                                                                        value="{{ $nilai['semester_6']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_6_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
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
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_1_sakit'] }}"
                                                                    name="sm_1_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_1_izin'] }}"
                                                                    name="sm_1_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_1_alpa'] }}"
                                                                    name="sm_1_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 2</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_2_sakit'] }}"
                                                                    name="sm_2_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_2_izin'] }}"
                                                                    name="sm_2_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_2_alpa'] }}"
                                                                    name="sm_2_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 3</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_3_sakit'] }}"
                                                                    name="sm_3_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_3_izin'] }}"
                                                                    name="sm_3_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_3_alpa'] }}"
                                                                    name="sm_3_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 4</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_4_sakit'] }}"
                                                                    name="sm_4_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_4_izin'] }}"
                                                                    name="sm_4_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_4_alpa'] }}"
                                                                    name="sm_4_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 5</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_5_sakit'] }}"
                                                                    name="sm_5_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_5_izin'] }}"
                                                                    name="sm_5_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_5_alpa'] }}"
                                                                    name="sm_5_alpa" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Semester 6</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">SAKIT</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_6_sakit'] }}"
                                                                    name="sm_6_sakit" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">IZIN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_6_izin'] }}"
                                                                    name="sm_6_izin" placeholder="Input Nilai">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">TANPA KETERANGAN</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $kehadiran['sm_6_alpa'] }}"
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
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Naik/Tinggal Kelas</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_kelas_7"
                                                                    value="{{ $status_akhir_tahun['kelas_7'] }}"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Tahun Ajaran</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahun_ajaran_kelas_7"
                                                                    value="{{ $status_akhir_tahun['tahun_ajaran_kelas_7'] ?? '' }}"
                                                                    placeholder="Contoh: 2024/2025">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <input type="date" class="form-control"
                                                                    name="tanggal_akhir_tahun_7"
                                                                    value="{{ $status_akhir_tahun['tanggal_akhir_tahun_7'] ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">Wali Kelas</label>
                                                                <select class="form-control" name="wali_kelas_7"
                                                                    id="wali_kelas_7">
                                                                    <option value="">--pilih--</option>
                                                                    @foreach ($guru as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            {{ $status_akhir_tahun['wali_kelas_7'] == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->nama }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Kelas 8</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Naik/Tinggal Kelas</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_kelas_8"
                                                                    value="{{ $status_akhir_tahun['kelas_8'] }}"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Tahun Ajaran</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahun_ajaran_kelas_8"
                                                                    value="{{ $status_akhir_tahun['tahun_ajaran_kelas_8'] ?? '' }}"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <input type="date" class="form-control"
                                                                    name="tanggal_akhir_tahun_8"
                                                                    value="{{ $status_akhir_tahun['tanggal_akhir_tahun_8'] ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">Wali Kelas</label>
                                                                <select class="form-control" name="wali_kelas_8"
                                                                    id="wali_kelas_8">
                                                                    <option value="">--pilih--</option>
                                                                    @foreach ($guru as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            {{ $status_akhir_tahun['wali_kelas_8'] == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->nama }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5><u><b>Kelas 9</b></u></h5>
                                                    <div class="row">
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Naik/Tinggal Kelas</label>
                                                                <input type="text" class="form-control"
                                                                    name="status_kelas_9"
                                                                    value="{{ $status_akhir_tahun['kelas_9'] }}"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Tahun Ajaran</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahun_ajaran_kelas_9"
                                                                    value="{{ $status_akhir_tahun['tahun_ajaran_kelas_9'] ?? '' }}"
                                                                    placeholder="Contoh: Naik ke Kelas 8 / Tinggal di Kelas 7">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <input type="date" class="form-control"
                                                                    name="tanggal_akhir_tahun_9"
                                                                    value="{{ $status_akhir_tahun['tanggal_akhir_tahun_9'] ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt--2 mb-0">
                                                            <div class="form-group">
                                                                <label for="agama">Wali Kelas</label>
                                                                <select class="form-control" name="wali_kelas_9"
                                                                    id="wali_kelas_9">
                                                                    <option value="">--pilih--</option>
                                                                    @foreach ($guru as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            {{ $status_akhir_tahun['wali_kelas_9'] == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->nama }}</option>
                                                                    @endforeach
                                                                </select>
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
                                                                    name="status_akhir"
                                                                    value="{{ $status_akhir_tahun['status_akhir'] }}"
                                                                    placeholder="Contoh: LULUS">
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
                                                                        value="{{ $nilai_ijazah['a'][$loop->iteration - 1]['nilai_ijazah_a_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                        placeholder="Input Nilai">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <hr>
                                                    <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u>
                                                    </h5>
                                                    <div class="row">
                                                        @foreach ($mapel->where('kelompok', 'B') as $item)
                                                            @if (isset($nilai_ijazah['b'][$loop->iteration - 1]['nilai_ijazah_b_' . str_replace(' ', '_', '' . $item->nama . '')]))
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_ijazah_b_{{ $item->nama }}"
                                                                            value="{{ $nilai_ijazah['b'][$loop->iteration - 1]['nilai_ijazah_b_' . str_replace(' ', '_', '' . $item->nama . '')] }}"
                                                                            placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="col-6 mt--2 mb-0">
                                                                    <div class="form-group">
                                                                        <label for="agama">
                                                                            {{ $item->nama }}</label>
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_ijazah_b_{{ $item->nama }}"
                                                                            value="" placeholder="Input Nilai">
                                                                    </div>
                                                                </div>
                                                            @endif
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
