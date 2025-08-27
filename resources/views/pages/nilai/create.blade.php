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
                    <form action="{{ route('data-induk.store-nilai', $data->id) }}" method="POST">
                        <div class="card">
                            <div class="card-body">
                                @csrf
                                <h4 class="page-title">Nilai Sikap</h4>
                                <hr>
                                <h5><u><b>Semester 1</b></u></h5>
                                <div class="row">
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SPIRITUAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_1_spiritual"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SOSIAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_1_sosial"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 2</b></u></h5>
                                <div class="row">
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SPIRITUAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_2_spiritual"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SOSIAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_2_sosial"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 3</b></u></h5>
                                <div class="row">
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SPIRITUAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_3_spiritual"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SOSIAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_3_sosial"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 4</b></u></h5>
                                <div class="row">
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SPIRITUAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_4_spiritual"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SOSIAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_4_sosial"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 5</b></u></h5>
                                <div class="row">
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SPIRITUAL</label>
                                            <input type="text" class="form-control" name="sm_5_spiritual"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-6 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SIKAP SOSIAL</label>
                                            <input type="text" class="form-control" value="-" name="sm_5_sosial"
                                                placeholder="Input Nilai">
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
                                            <input type="text" class="form-control" value="-" name="sm_6_sosial"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                @csrf
                                <h4 class="page-title">Semester 1</h4>
                                <hr>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok A</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'A') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_1_a_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_1_a_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'B') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_1_b_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_1_b_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_1_c_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_1_c_keterampilan_{{ $item->nama }}" value=""
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
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_2_a_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_2_a_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'B') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_2_b_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_2_b_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_2_c_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_2_c_keterampilan_{{ $item->nama }}" value=""
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
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_3_a_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_3_a_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'B') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_3_b_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_3_b_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_3_c_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_3_c_keterampilan_{{ $item->nama }}" value=""
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
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_4_a_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_4_a_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'B') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_4_b_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_4_b_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_4_c_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_4_c_keterampilan_{{ $item->nama }}" value=""
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
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_5_a_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_5_a_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'B') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_5_b_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_5_b_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_5_c_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_5_c_keterampilan_{{ $item->nama }}" value=""
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
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_6_a_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control"
                                                    name="sm_6_a_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok B</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'B') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_6_b_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_6_b_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <h5 style="color:rgb(255, 0, 0)"><u><b>Kelompok Extrakurikuler</b></u></h5>
                                <div class="row">
                                    @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">PENGETAHUAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_6_c_pengetahuan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                        <div class="col-6 mt--2 mb-0">
                                            <div class="form-group">
                                                <label for="agama">KETERAMPILAN {{ $item->nama }}</label>
                                                <input type="number" class="form-control" id=""
                                                    name="sm_6_c_keterampilan_{{ $item->nama }}" value=""
                                                    placeholder="Input Nilai">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                @csrf
                                <h4 class="page-title">Nilai Kehadiran</h4>
                                <hr>
                                <h5><u><b>Semester 1</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_1_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_1_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_1_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 2</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_2_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_2_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_2_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 3</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_3_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_3_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_3_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 4</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_4_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_4_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_4_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 5</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_5_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_5_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_5_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 6</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_6_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_6_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_6_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('data-induk.index') }}" class="btn btn-sm btn-default">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Kembali
                                    </a>
                                    <button class="btn btn-sm btn-success" id="save">Simpan</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                @csrf
                                <h4 class="page-title">Keterangan Naik Kelas</h4>
                                <hr>
                                <h5><u><b>Semester 1</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_1_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_1_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_1_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 2</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_2_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_2_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_2_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 3</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_3_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_3_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_3_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 4</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_4_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_4_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_4_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 5</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_5_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_5_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_5_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <h5><u><b>Semester 6</b></u></h5>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">SAKIT</label>
                                            <input type="number" class="form-control" value="0" name="sm_6_sakit"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">IZIN</label>
                                            <input type="number" class="form-control" value="0" name="sm_6_izin"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">TANPA KETERANGAN</label>
                                            <input type="number" class="form-control" value="0" name="sm_6_alpa"
                                                placeholder="Input Nilai">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('data-induk.index') }}" class="btn btn-sm btn-default">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Kembali
                                    </a>
                                    <button class="btn btn-sm btn-success" id="save">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
