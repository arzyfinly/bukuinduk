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
                        <a href="{{ route('data-induk.index') }}">Data Induk</a>
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
                            <form action="{{ route('data-induk.store') }}" method="POST">
                                @csrf

                                <h4 class="page-title">Data Siswa</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                                value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
                                            @error('nama_lengkap')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Nama Panggilan</label>
                                            <input type="text" class="form-control" id="nama_panggilan"
                                                name="nama_panggilan" value="{{ old('nama_panggilan') }}"
                                                placeholder="Nama Panggilan">
                                            @error('nama_panggilan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nisn">NISN</label>
                                            <input type="text" class="form-control" id="nisn" name="nisn"
                                                value="{{ old('nisn') }}" placeholder="NISN">
                                            @error('nisn')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nisn">NIS</label>
                                            <input type="text" class="form-control" id="nis" name="nis"
                                                value="{{ old('nis') }}" placeholder="NIS">
                                            @error('nis')
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
                                                value="{{ old('nik') }}" placeholder="NIK">
                                            @error('nik')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jenis_kelamin"
                                                name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                                placeholder="Jenis Kelamin">
                                            @error('jenis_kelamin')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="kelas">Kelas</label>
                                            <input type="text" class="form-control" id="kelas" name="kelas"
                                                value="{{ old('kelas') }}" placeholder="kelas">
                                            @error('kelas')
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
                                                value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
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
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                                value="{{ old('tgl_lahir') }}" placeholder="Tanggal Lahir">
                                            @error('tgl_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" id="agama" name="agama"
                                                value="{{ old('agama') }}" placeholder="Agama">
                                            @error('agama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Kewarganegaraan</label>
                                            <input type="text" class="form-control" id="kewarganegaraan"
                                                name="kewarganegaraan" value="{{ old('kewarganegaraan') }}"
                                                placeholder="Kewarganegaraan">
                                            @error('kewarganegaraan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jml Saudara Kandung</label>
                                            <input type="text" class="form-control" id="sdr_kandung"
                                                name="sdr_kandung" value="{{ old('sdr_kandung') }}"
                                                placeholder="Jml Saudara Kandung">
                                            @error('sdr_kandung')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jml Saudara Tiri</label>
                                            <input type="text" class="form-control" id="sdr_tiri" name="sdr_tiri"
                                                value="{{ old('sdr_tiri') }}" placeholder="Jml Saudara Tiri">
                                            @error('sdr_tiri')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jml Saudara Angkat</label>
                                            <input type="text" class="form-control" id="sdr_angkat" name="sdr_angkat"
                                                value="{{ old('sdr_angkat') }}" placeholder="Jml Saudara Angkat">
                                            @error('sdr_angkat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="status_anak">Status Anak</label>
                                            <input type="text" class="form-control" id="status_anak"
                                                name="status_anak" value="{{ old('status_anak') }}"
                                                placeholder="Status Anak">
                                            @error('status_anak')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="bahasa">Bahasa</label>
                                            <input type="text" class="form-control" id="bahasa" name="bahasa"
                                                value="{{ old('bahasa') }}" placeholder="Bahasa">
                                            @error('bahasa')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Tempat Tinggal</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">No Telepon</label>
                                            <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                                value="{{ old('no_telepon') }}" placeholder="No Telepon">
                                            @error('no_telepon')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Status Tinggal</label>
                                            <input type="text" class="form-control" id="status_tinggal"
                                                name="status_tinggal" value="{{ old('status_tinggal') }}"
                                                placeholder="Status Tinggal">
                                            @error('status_tinggal')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Jarak Ke Sekolah</label>
                                            <input type="text" class="form-control" id="jarak_tinggal"
                                                name="jarak_tinggal" value="{{ old('jarak_tinggal') }}"
                                                placeholder="Jarak Ke Sekolah">
                                            @error('jarak_tinggal')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="" cols="30" rows="3">{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Keterangan Sehat</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Gol Darah</label>
                                            <input type="text" class="form-control" id="gol_darah" name="gol_darah"
                                                value="{{ old('gol_darah') }}" placeholder="Gol Darah">
                                            @error('gol_darah')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="history_sakit">Riwayat Penyakit</label>
                                            <input type="text" class="form-control" id="history_sakit"
                                                name="history_sakit" value="{{ old('history_sakit') }}"
                                                placeholder="Riwayat Penyakit">
                                            @error('history_sakit')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="kelainan">Kelainan</label>
                                            <input type="text" class="form-control" id="kelainan" name="kelainan"
                                                value="{{ old('kelainan') }}" placeholder="Kelainan">
                                            @error('kelainan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tinggi">Tinggi Badan</label>
                                            <input type="text" class="form-control" id="tinggi" name="tinggi"
                                                value="{{ old('tinggi') }}" placeholder="Tinggi Badan">
                                            @error('tinggi')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Berat Badan</label>
                                            <input type="text" class="form-control" id="berat" name="berat"
                                                value="{{ old('berat') }}" placeholder="Berat Badan">
                                            @error('berat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Pendidikan Sebelumnya</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tamatan">Tamatan</label>
                                            <input type="text" class="form-control" id="tamatan" name="tamatan"
                                                value="{{ old('tamatan') }}" placeholder="Tamatan">
                                            @error('tamatan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tgl_nmr_ijasah">Tanggal Nomor Ijazah</label>
                                            <input type="text" class="form-control" id="tgl_nmr_ijasah"
                                                name="tgl_nmr_ijasah" value="{{ old('tgl_nmr_ijasah') }}"
                                                placeholder="Tanggal Nomor Ijazah">
                                            @error('tgl_nmr_ijasah')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Tanggal Nomor SHUN</label>
                                            <input type="text" class="form-control" id="tgl_nmr_shun"
                                                name="tgl_nmr_shun" value="{{ old('tgl_nmr_shun') }}"
                                                placeholder="Tanggal Nomor SHUN">
                                            @error('tgl_nmr_shun')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="lama_belajar">Lama Belajar</label>
                                            <input type="text" class="form-control" id="lama_belajar"
                                                name="lama_belajar" value="{{ old('lama_belajar') }}"
                                                placeholder="Lama Belajar">
                                            @error('lama_belajar')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Pindahan</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="dari_sekolah">Dari Sekolah</label>
                                            <input type="text" class="form-control" id="dari_sekolah"
                                                name="dari_sekolah" value="{{ old('dari_sekolah') }}"
                                                placeholder="Dari Sekolah">
                                            @error('dari_sekolah')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="alasan">Alasan</label>
                                            <input type="text" class="form-control" id="alasan" name="alasan"
                                                value="{{ old('alasan') }}" placeholder="Alasan">
                                            @error('alasan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Diterima</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="dikelas">Di Kelas</label>
                                            <input type="text" class="form-control" id="dikelas" name="dikelas"
                                                value="{{ old('dikelas') }}" placeholder="Di Kelas">
                                            @error('dikelas')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="kelompok">Kelompok</label>
                                            <input type="text" class="form-control" id="kelompok" name="kelompok"
                                                value="{{ old('kelompok') }}" placeholder="Kelompok">
                                            @error('kelompok')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tanggal_diterima">Tanggal Di Terima</label>
                                            <input type="text" class="form-control" id="tanggal_diterima"
                                                name="tanggal_diterima" value="{{ old('tanggal_diterima') }}"
                                                placeholder="Tanggal Di Terima">
                                            @error('tanggal_diterima')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Keterangan Ayah Kandung</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_nama">Nama</label>
                                            <input type="text" class="form-control" id="a_nama" name="a_nama"
                                                value="{{ old('a_nama') }}" placeholder="Nama">
                                            @error('a_nama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="a_tempat_lahir"
                                                name="a_tempat_lahir" value="{{ old('a_tempat_lahir') }}"
                                                placeholder="Tempat Lahir">
                                            @error('a_tempat_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="a_tgl_lahir"
                                                name="a_tgl_lahir" value="{{ old('a_tgl_lahir') }}"
                                                placeholder="Tanggal Lahir">
                                            @error('a_tgl_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_agama">Agama</label>
                                            <input type="text" class="form-control" id="a_agama" name="a_agama"
                                                value="{{ old('a_agama') }}" placeholder="Agama">
                                            @error('a_agama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" class="form-control" id="a_kewarganegaraan"
                                                name="a_kewarganegaraan" value="{{ old('a_kewarganegaraan') }}"
                                                placeholder="Kewarganegaraan">
                                            @error('a_kewarganegaraan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_pendidikan">Pendidikan</label>
                                            <input type="text" class="form-control" id="a_pendidikan"
                                                name="a_pendidikan" value="{{ old('a_pendidikan') }}"
                                                placeholder="Pendidikan">
                                            @error('a_pendidikan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" id="a_pekerjaan"
                                                name="a_pekerjaan" value="{{ old('a_pekerjaan') }}"
                                                placeholder="Pekerjaan">
                                            @error('a_pekerjaan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_pengeluaran">Pengeluaran</label>
                                            <input type="text" class="form-control" id="a_pengeluaran"
                                                name="a_pengeluaran" value="{{ old('a_pengeluaran') }}"
                                                placeholder="Pengeluaran">
                                            @error('a_pengeluaran')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="agama">Alamat</label>
                                            <textarea name="a_alamat" class="form-control" id="" cols="30" rows="3">{{ old('a_alamat') }}</textarea>
                                            @error('a_alamat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_no_telepon">No Telepon</label>
                                            <input type="text" class="form-control" id="a_no_telepon"
                                                name="a_no_telepon" value="{{ old('a_no_telepon') }}"
                                                placeholder="No Telepon">
                                            @error('a_no_telepon')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="a_status_hidup">Status Hidup</label>
                                            <input type="text" class="form-control" id="a_status_hidup"
                                                name="a_status_hidup" value="{{ old('a_status_hidup') }}"
                                                placeholder="Tanggal Di Terima">
                                            @error('a_status_hidup')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Keterangan Ibu Kandung</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_nama">Nama</label>
                                            <input type="text" class="form-control" id="i_nama" name="i_nama"
                                                value="{{ old('i_nama') }}" placeholder="Nama">
                                            @error('i_nama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="i_tempat_lahir"
                                                name="i_tempat_lahir" value="{{ old('i_tempat_lahir') }}"
                                                placeholder="Tempat Lahir">
                                            @error('i_tempat_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="i_tgl_lahir"
                                                name="i_tgl_lahir" value="{{ old('i_tgl_lahir') }}"
                                                placeholder="Tanggal Lahir">
                                            @error('i_tgl_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_agama">Agama</label>
                                            <input type="text" class="form-control" id="i_agama" name="i_agama"
                                                value="{{ old('i_agama') }}" placeholder="Agama">
                                            @error('i_agama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" class="form-control" id="i_kewarganegaraan"
                                                name="i_kewarganegaraan" value="{{ old('i_kewarganegaraan') }}"
                                                placeholder="Kewarganegaraan">
                                            @error('i_kewarganegaraan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_pendidikan">Pendidikan</label>
                                            <input type="text" class="form-control" id="i_pendidikan"
                                                name="i_pendidikan" value="{{ old('i_pendidikan') }}"
                                                placeholder="Pendidikan">
                                            @error('i_pendidikan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" id="i_pekerjaan"
                                                name="i_pekerjaan" value="{{ old('i_pekerjaan') }}"
                                                placeholder="Pekerjaan">
                                            @error('i_pekerjaan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_pengeluaran">Pengeluaran</label>
                                            <input type="text" class="form-control" id="i_pengeluaran"
                                                name="i_pengeluaran" value="{{ old('i_pengeluaran') }}"
                                                placeholder="Pengeluaran">
                                            @error('i_pengeluaran')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_alamat">Alamat</label>
                                            <textarea name="i_alamat" class="form-control" id="" cols="30" rows="3">{{ old('i_alamat') }}</textarea>
                                            @error('i_alamat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_no_telepon">No Telepon</label>
                                            <input type="text" class="form-control" id="i_no_telepon"
                                                name="i_no_telepon" value="{{ old('i_no_telepon') }}"
                                                placeholder="No Telepon">
                                            @error('i_no_telepon')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_status_hidup">Status Hidup</label>
                                            <input type="text" class="form-control" id="i_status_hidup"
                                                name="i_status_hidup" value="{{ old('i_status_hidup') }}"
                                                placeholder="Tanggal Di Terima">
                                            @error('i_status_hidup')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Keterangan Wali</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_nama">Nama</label>
                                            <input type="text" class="form-control" id="w_nama" name="w_nama"
                                                value="{{ old('w_nama') }}" placeholder="Nama">
                                            @error('w_nama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="w_tempat_lahir"
                                                name="w_tempat_lahir" value="{{ old('w_tempat_lahir') }}"
                                                placeholder="Tempat Lahir">
                                            @error('w_tempat_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="w_tgl_lahir"
                                                name="w_tgl_lahir" value="{{ old('w_tgl_lahir') }}"
                                                placeholder="Tanggal Lahir">
                                            @error('w_tgl_lahir')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_agama">Agama</label>
                                            <input type="text" class="form-control" id="w_agama" name="w_agama"
                                                value="{{ old('w_agama') }}" placeholder="Agama">
                                            @error('w_agama')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" class="form-control" id="w_kewarganegaraan"
                                                name="w_kewarganegaraan" value="{{ old('w_kewarganegaraan') }}"
                                                placeholder="Kewarganegaraan">
                                            @error('w_kewarganegaraan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_pendidikan">Pendidikan</label>
                                            <input type="text" class="form-control" id="w_pendidikan"
                                                name="w_pendidikan" value="{{ old('w_pendidikan') }}"
                                                placeholder="Pendidikan">
                                            @error('w_pendidikan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" id="w_pekerjaan"
                                                name="w_pekerjaan" value="{{ old('w_pekerjaan') }}"
                                                placeholder="Pekerjaan">
                                            @error('w_pekerjaan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_pengeluaran">Pengeluaran</label>
                                            <input type="text" class="form-control" id="w_pengeluaran"
                                                name="w_pengeluaran" value="{{ old('w_pengeluaran') }}"
                                                placeholder="Pengeluaran">
                                            @error('w_pengeluaran')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="i_alamat">Alamat</label>
                                            <textarea name="w_alamat" class="form-control" id="" cols="30" rows="3">{{ old('w_alamat') }}</textarea>
                                            @error('w_alamat')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="w_no_telepon">No Telepon</label>
                                            <input type="text" class="form-control" id="w_no_telepon"
                                                name="w_no_telepon" value="{{ old('w_no_telepon') }}"
                                                placeholder="No Telepon">
                                            @error('w_no_telepon')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Kegemaran</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="kesenian">Kesenian</label>
                                            <input type="text" class="form-control" id="kesenian" name="kesenian"
                                                value="{{ old('kesenian') }}" placeholder="Kesenian">
                                            @error('kesenian')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="olahraga">Olahraga</label>
                                            <input type="text" class="form-control" id="olahraga" name="olahraga"
                                                value="{{ old('olahraga') }}" placeholder="Olahraga">
                                            @error('olahraga')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="organisasi">Organisasi</label>
                                            <input type="text" class="form-control" id="organisasi" name="organisasi"
                                                value="{{ old('organisasi') }}" placeholder="Organisasi">
                                            @error('organisasi')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="lain_lain">Lain-lain</label>
                                            <input type="text" class="form-control" id="lain_lain" name="lain_lain"
                                                value="{{ old('lain_lain') }}" placeholder="Lain-lain">
                                            @error('lain_lain')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Keterangan Pengembangan Peserta Didik</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tgl_meninggalkan_sekolah">Tanggal Meninggalkan Sekolah</label>
                                            <input type="text" class="form-control" id="tgl_meninggalkan_sekolah"
                                                name="tgl_meninggalkan_sekolah"
                                                value="{{ old('tgl_meninggalkan_sekolah') }}"
                                                placeholder="Tanggal Meninggalkan Sekolah">
                                            @error('tgl_meninggalkan_sekolah')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="alasan_meninggalkan_sekolah">Alasan Meninggalkan Sekolah</label>
                                            <input type="text" class="form-control" id="alasan_meninggalkan_sekolah"
                                                name="alasan_meninggalkan_sekolah"
                                                value="{{ old('alasan_meninggalkan_sekolah') }}"
                                                placeholder="Alasan Meninggalkan Sekolah">
                                            @error('alasan_meninggalkan_sekolah')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tanggal_lulus">Tanggal Lulus</label>
                                            <input type="text" class="form-control" id="tanggal_lulus"
                                                name="tanggal_lulus" value="{{ old('tanggal_lulus') }}"
                                                placeholder="Tanggal Lulus">
                                            @error('tanggal_lulus')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nomor_ijazah">Nomor Ijazah</label>
                                            <input type="text" class="form-control" id="nomor_ijazah"
                                                name="nomor_ijazah" value="{{ old('nomor_ijazah') }}"
                                                placeholder="Nomor Ijazah">
                                            @error('nomor_ijazah')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nomor_shun">Nomor SHUN</label>
                                            <input type="text" class="form-control" id="nomor_shun" name="nomor_shun"
                                                value="{{ old('nomor_shun') }}" placeholder="Nomor SHUN">
                                            @error('nomor_shun')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="page-title">Keterangan Selesai Pendidikan</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="melanjutkan_ke">Melanjutkan Ke</label>
                                            <input type="text" class="form-control" id="melanjutkan_ke"
                                                name="melanjutkan_ke" value="{{ old('melanjutkan_ke') }}"
                                                placeholder="Melanjutkan Ke">
                                            @error('melanjutkan_ke')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="tanggal_mulai_bekerja">Tanggal Mulai Bekerja</label>
                                            <input type="text" class="form-control" id="tanggal_mulai_bekerja"
                                                name="tanggal_mulai_bekerja" value="{{ old('tanggal_mulai_bekerja') }}"
                                                placeholder="Alasan tanggal_mulai_bekerja Sekolah">
                                            @error('tanggal_mulai_bekerja')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="nama_perusahaan">Nama Tempat Bekerja</label>
                                            <input type="text" class="form-control" id="nama_perusahaan"
                                                name="nama_perusahaan" value="{{ old('nama_perusahaan') }}"
                                                placeholder="Nama Tempat Bekerja">
                                            @error('nama_perusahaan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4 mt--2 mb-0">
                                        <div class="form-group">
                                            <label for="penghasilan">Penghasilan</label>
                                            <input type="text" class="form-control" id="penghasilan"
                                                name="penghasilan" value="{{ old('penghasilan') }}"
                                                placeholder="Penghasilan">
                                            @error('penghasilan')
                                                <small class="text-danger" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
