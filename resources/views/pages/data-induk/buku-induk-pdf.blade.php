<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Induk</title>
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .page-break {
            page-break-after: always;
        }

        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            justify-content: center;
            left: -50%;
        }

        hr {
            border-top: 3px solid #3a3a3a;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
        }

        .left {
            width: 45%
        }

        .middle {
            width: 45%;
        }

        .right {
            width: 10%;
        }

        .font-normal {
            font-size: 11px;
        }

        .font-normal-leger {
            font-size: 11px;
        }

        .font-sub-judul {
            font-size: 12px;
        }

        table,
        th,
        td {
            /* border: 1px solid black; */
            border-collapse: collapse;
        }

        th,
        td {
            padding-top: 0px;
            padding-bottom: 0px;
            vertical-align: middle;
        }

        .text-center {
            text-align: center;
        }

        .align-middle {
            vertical-align: middle
        }

        .double-height {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }

        .rotate {
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            width: 1.5em;
        }

        .rotate div {
            -moz-transform: rotate(-90.0deg);
            /* FF3.5+ */
            -o-transform: rotate(-90.0deg);
            /* Opera 10.5 */
            -webkit-transform: rotate(-90.0deg);
            /* Saf3.1+, Chrome */
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);
            /* IE6,IE7 */
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
            /* IE8 */
            margin-left: -10em;
            margin-right: -10em;
        }

        .table-leger {
            border: 1px solid black;
        }

        .table-leger td {
            padding-top: 3px;
            padding-bottom: 3px;
        }
    </style>
</head>

<body>
    <table style="width: 100%">
        <tr>
            <td style="text-align: center">
                <span style="font-size: 14px;font-weight:700">LEMBAR BUKU INDUK PESERTA DIDIK SMP</span>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-size: 14px;font-weight:700">NOMOR INDUK PESERTA {{ $data->nis }} / {{ $data->nisn }}</span>
            </td>
        </tr>
    </table>
    <br>
    <div class="row">
        <div class="column left">
            <table style="width: 100%">
                {{-- Keterangan Tentang Peserta Didik --}}
                <tr>
                    <th style="width: 5%"><span class="font-sub-judul">A</span></th>
                    <th colspan="4" style="text-align: left"><span class="font-sub-judul">KETERANGAN TENTANG
                            PESERTA DIDIK</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">1.</div>
                    </td>
                    <td style="width: 45%;">
                        <div class="font-normal">Nama Lengkap Peserta Didik</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ strtoupper($data->nama) }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">Nama Panggilan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ strtoupper($data_siswa->nama_panggilan) }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">2.</div>
                    </td>
                    <td>
                        <div class="font-normal">Jenis kelamin</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data->jenis_kelamin }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">3.</div>
                    </td>
                    <td>
                        <div class="font-normal">Tempat dan tanggal lahir</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ strtoupper($data_siswa->tempat_lahir) }}
                            &nbsp;&nbsp;&nbsp;&nbsp; {{ $data_siswa->tgl_lahir }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">4.</div>
                    </td>
                    <td>
                        <div class="font-normal">Agama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->agama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">5.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kewarganegaraan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->kewarganegaraan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">6.</div>
                    </td>
                    <td>
                        <div class="font-normal">Anak keberapa</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">7.</div>
                    </td>
                    <td>
                        <div class="font-normal">Jumlah saudaran kandung</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->sdr_kandung }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">8.</div>
                    </td>
                    <td>
                        <div class="font-normal">Jumlah saudaran tiri</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->sdr_tiri }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">9.</div>
                    </td>
                    <td>
                        <div class="font-normal">Jumlah saudaran angkat</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->sdr_angkat }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">10.</div>
                    </td>
                    <td>
                        <div class="font-normal">Anak yatim/piatu/yatim piatu</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->status_anak }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">11.</div>
                    </td>
                    <td>
                        <div class="font-normal">Bahasa sehari-hari di runah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $data_siswa->bahasa }}</div>
                    </td>
                </tr>

                {{-- Keterangan Tempat Tinggal --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">B</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN TEMPAT
                            TINGGAL</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">12.</div>
                    </td>
                    <td>
                        <div class="font-normal">Alamat</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $tempat_tinggal->alamat }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">13.</div>
                    </td>
                    <td>
                        <div class="font-normal">Nomor telpon/HP</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $tempat_tinggal->no_telepon }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">14.</div>
                    </td>
                    <td>
                        <div class="font-normal">Tinggal dengan orang tua/saudara/di asarama/kost</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $tempat_tinggal->status_tinggal }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">15.</div>
                    </td>
                    <td>
                        <div class="font-normal">Jarak tempat tinggal ke sekolah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $tempat_tinggal->jarak_tinggal }}</div>
                    </td>
                </tr>

                {{-- Keterangan Kesehatan --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">C</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN
                            KESEHATAN</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">16.</div>
                    </td>
                    <td>
                        <div class="font-normal">Golongan darah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_sehat->gol_darah }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">17.</div>
                    </td>
                    <td>
                        <div class="font-normal">Penyakit yang pernah diderita</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_sehat->history_sakit }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">TBC/Cacar/Malaria dan lain-lain</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">18.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kelainan jasmani</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_sehat->kelainan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">19.</div>
                    </td>
                    <td>
                        <div class="font-normal">Tinggi dan Berat badan <br> (Saat diterima di sekolah ini)</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_sehat->tinggi . ' Cm' . ' & ' . $ket_sehat->berat . ' Kg' }}
                        </div>
                    </td>
                </tr>

                {{-- Keterangan Pendidikan --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">D</span></th>
                    <th colspan="4" style="text-align: left; padding-top:12px"><span
                            class="font-sub-judul">KETERANGAN
                            PENDIDIKAN</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">20.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pendidikan sebelumnya</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">a. Tamatan dari</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->pendidikan_sebelumnya->tamatan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">b. Tamatan dan nomor STTB/Ijasah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->pendidikan_sebelumnya->tgl_nmr_ijasah }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">c. Tanggal dan nomor SHUN</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->pendidikan_sebelumnya->tgl_nmr_shun }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">d. Lama Belajar</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->pendidikan_sebelumnya->lama_belajar }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">21.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pindahan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">a. Dari sekolah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->pindahan->dari_sekolah }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">b. Alasan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->pindahan->alasan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">22.</div>
                    </td>
                    <td>
                        <div class="font-normal">Diterima di sekolah ini</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">a. Di kelas</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->diterima->di_kelas }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">b. Kelompok</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->diterima->kelompok }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">c. Tanggal</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pendidikan->diterima->tanggal_diterima }}</div>
                    </td>
                </tr>

                {{-- Keterangan Tentang Ayah Kandung --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">E</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN
                            TENTANG AYAH KANDUNG</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">23.</div>
                    </td>
                    <td>
                        <div class="font-normal">Nama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->nama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">24.</div>
                    </td>
                    <td>
                        <div class="font-normal">Tempat dan tanggal lahir</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->tempat_lahir . ' ' . $ayah_kandung->tgl_lahir }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">25.</div>
                    </td>
                    <td>
                        <div class="font-normal">Agama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->agama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">26.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kewarganegaraan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->kewarganegaraan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">27.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pendidikan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->pendidikan }}</div>
                    </td>
                </tr>
                <tr>
                    <th colspan="5" style="text-align: left; padding-top: 10px">
                        <div class="font-normal">Lampiran <br> 1. Foto Copy Ijazah 1 Lembar <br> 2. Foto Copy SHUN 1
                            Lembar</div>
                    </th>
                </tr>
            </table>
        </div>
        <div class="column middle">
            <table style="width: 100%">
                <tr>
                    <td style="width: 5%"></td>
                    <td style="width: 1px">
                        <div class="font-normal">28.</div>
                    </td>
                    <td style="width: 45%;">
                        <div class="font-normal">Pekerjaan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->pekerjaan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">29.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pengeluaran / Penghasilan perbulan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->pengeluaran }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">30.</div>
                    </td>
                    <td>
                        <div class="font-normal">Alamat Rumah/nomor telpn</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->alamat . ' ' . $ayah_kandung->no_telepon }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">31.</div>
                    </td>
                    <td>
                        <div class="font-normal">Masih hidup/meninggal dunia</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ayah_kandung->status_hidup }}</div>
                    </td>
                </tr>

                {{-- Keterangan Tentang Ibu Kandung --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">F</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN TENTANG IBU KANDUNG</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">32.</div>
                    </td>
                    <td>
                        <div class="font-normal">Nama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->nama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">33.</div>
                    </td>
                    <td>
                        <div class="font-normal">Tempat dan tanggal lahir</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->tempat_lahir . ' ' . $ibu_kandung->tgl_lahir }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">34.</div>
                    </td>
                    <td>
                        <div class="font-normal">Agama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->agama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">35.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kewarganegaraan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->kewarganegaraan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">36.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pendidikan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->pendidikan }}</div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%"></td>
                    <td style="width: 1px">
                        <div class="font-normal">37.</div>
                    </td>
                    <td style="width: 45%;">
                        <div class="font-normal">Pekerjaan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->pekerjaan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">38.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pengeluaran / Penghasilan perbulan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->pengeluaran }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">39.</div>
                    </td>
                    <td>
                        <div class="font-normal">Alamat Rumah/nomor telpn</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->alamat . ' ' . $ibu_kandung->no_telepon }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">40.</div>
                    </td>
                    <td>
                        <div class="font-normal">Masih hidup/meninggal dunia</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ibu_kandung->status_hidup }}</div>
                    </td>
                </tr>

                {{-- Keterangan Tentang Wali --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">G</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN TENTANG WALI</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">41.</div>
                    </td>
                    <td>
                        <div class="font-normal">Nama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->nama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">42.</div>
                    </td>
                    <td>
                        <div class="font-normal">Tempat dan tanggal lahir</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->tempat_lahir . ' ' . $wali->tgl_lahir }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">43.</div>
                    </td>
                    <td>
                        <div class="font-normal">Agama</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->agama }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">44.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kewarganegaraan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->kewarganegaraan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">45.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pendidikan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->pendidikan }}</div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%"></td>
                    <td style="width: 1px">
                        <div class="font-normal">46.</div>
                    </td>
                    <td style="width: 45%;">
                        <div class="font-normal">Pekerjaan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->pekerjaan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">47.</div>
                    </td>
                    <td>
                        <div class="font-normal">Pengeluaran perbulan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->pengeluaran }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">48.</div>
                    </td>
                    <td>
                        <div class="font-normal">Alamat Rumah/nomor telpn</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $wali->alamat . ' ' . $wali->no_telepon }}</div>
                    </td>
                </tr>

                {{-- Kegemaran Peserta Didik --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">H</span></th>
                    <th colspan="4" style="text-align: left; padding-top:12px"><span
                            class="font-sub-judul">KEGEMARAN PESERTA DIDIK</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">49.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kesenian</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $kegemaran->kesenian }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">50.</div>
                    </td>
                    <td>
                        <div class="font-normal">Olah raga</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $kegemaran->olahraga }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">51.</div>
                    </td>
                    <td>
                        <div class="font-normal">Kemasyarakatan/Organisasi</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $kegemaran->organisasi }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">52.</div>
                    </td>
                    <td>
                        <div class="font-normal">Lain-lain</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $kegemaran->lain_lain }}</div>
                    </td>
                </tr>

                {{-- Keterangan Pengembangan Peserta Didik --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">I</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN PENGEMBANGAN PESERTA DIDIK</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">53.</div>
                    </td>
                    <td>
                        <div class="font-normal">Menerima Bea Siswa</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">Tahun <span style="display:inline-block; width: 50px;"></span>
                            TK</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">dari ...</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">Tahun <span style="display:inline-block; width: 50px;"></span>
                            TK</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">dari ...</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">Tahun <span style="display:inline-block; width: 50px;"></span>
                            TK</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">dari ...</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">54.</div>
                    </td>
                    <td>
                        <div class="font-normal">Meniggalkan Sekolah ini</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">a. Tanggal meninggalkan sekolah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">
                            {{ $ket_pengembangan->meninggalkan_sekolah->tgl_meninggalkan_sekolah }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">b. Alasan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">
                            {{ $ket_pengembangan->meninggalkan_sekolah->alasan_meninggalkan_sekolah }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">55.</div>
                    </td>
                    <td>
                        <div class="font-normal">Akhir Pendidikan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pengembangan->akhir_pendidikan->tanggal_lulus }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">a. Tamat belajar/lulus</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">b. Nomor STTB/Ijazah</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pengembangan->akhir_pendidikan->nomor_ijazah }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">c. Nomor SHUN</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_pengembangan->akhir_pendidikan->nomor_shun }}</div>
                    </td>
                </tr>

                {{-- Keterangan Setelah Pendidikan --}}

                <tr>
                    <th style="padding-top: 12px"><span class="font-sub-judul">I</span></th>
                    <th colspan="4" style="text-align: left; padding-top: 12px"><span
                            class="font-sub-judul">KETERANGAN SETELAH SELESAI PENDIDIKAN</span></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">56.</div>
                    </td>
                    <td>
                        <div class="font-normal">Melanjutkan ke</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_selesai_pendidikan->melanjutkan_ke }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal">57.</div>
                    </td>
                    <td>
                        <div class="font-normal">Bekerja</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal"></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">a. Tanggal mulai bekerja</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_selesai_pendidikan->bekerja->tanggal_mulai_bekerja }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">b. Nama Perusahaan/lembaga dan lain lain</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_selesai_pendidikan->bekerja->nama_perusahaan }}</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 1px">
                        <div class="font-normal"></div>
                    </td>
                    <td>
                        <div class="font-normal">c. Penghasilan</div>
                    </td>
                    <td style="width: 1px">:</td>
                    <td>
                        <div class="font-normal">{{ $ket_selesai_pendidikan->bekerja->penghasilan }}</div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="column right">
            <div
                style="background: #d8d8d8;
            width: 3cm;
            height: 4cm;
            outline: 1px solid #3d3d3d;">

            </div>
            <div style="margin-bottom: 15cm"></div>
            <div
                style="background: #d8d8d8;
            width: 3cm;
            height: 4cm;
            outline: 1px solid #3d3d3d;">

            </div>
        </div>
    </div>

    @if ($data->nilai != null)
        <div class="page-break"></div>

        <table style="width: 100%">
            <tr>
                <td style="text-align: center">
                    <span style="font-size: 14px;font-weight:700">LAPORAN PENILAIAN HASIL BELAJAR / LEGER</span>
                </td>
            </tr>
        </table>
        <br>
        <span class="font-sub-judul">NAMA PESERTA DIDIK : {{ strtoupper($data->nama) }}</span>
        <br>
        <table border="1" style="width: 100%" class="table-leger">
            <tr>
                <td rowspan="6" style="vertical-align: middle;width: 2%;" class="text-center">NO</td>
                <td style="width: 20%;" class="font-normal-leger">TAHUN PELAJARAN</td>
                <td class="font-normal-leger text-center" colspan="9">2021/2022</td>
                <td class="font-normal-leger text-center" colspan="8">2022/2023</td>
                <td class="font-normal-leger text-center" colspan="8">2023/2024</td>
                <td class="font-normal-leger text-center" colspan="2">IJAZAH</td>
            </tr>
            <tr>
                <td style="width: 20%;" class="font-normal-leger">KELAS</td>
                <td class="font-normal-leger text-center" colspan="9">7</td>
                <td class="font-normal-leger text-center" colspan="8">8</td>
                <td class="font-normal-leger text-center" colspan="8">9</td>
                <td class="font-normal-leger text-center" colspan="2">TAHUN</td>
            </tr>
            <tr>
                <td style="width: 20%;" class="font-normal-leger">SEMESTER</td>
                <td class="font-normal-leger"></td>
                <td class="font-normal-leger text-center" colspan="4">1</td>
                <td class="font-normal-leger text-center" colspan="4">2</td>
                <td class="font-normal-leger text-center" colspan="4">1</td>
                <td class="font-normal-leger text-center" colspan="4">2</td>
                <td class="font-normal-leger text-center" colspan="4">1</td>
                <td class="font-normal-leger text-center" colspan="4">2</td>
                <td class="font-normal-leger text-center" colspan="2" rowspan="2">NILAI
                    LAMPIRAN IJAZAH</td>
            </tr>
            <tr>
                <td class="font-normal-leger align-middle" rowspan="3">NILAI</td>
                <td class="font-normal-leger align-middle" rowspan="3" style="width: 2%">KKM</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">PENGETAHUAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">KETERAMPILAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">PENGETAHUAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">KETERAMPILAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">PENGETAHUAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">KETERAMPILAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">PENGETAHUAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">KETERAMPILAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">PENGETAHUAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">KETERAMPILAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">PENGETAHUAN</td>
                <td class="font-normal-leger text-center" style="font-size: 9px" colspan="2">KETERAMPILAN</td>
            </tr>
            <tr>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center">PRE</td>
                <td class="font-normal-leger text-center" style="width: 5%;"></td>
                <td class="font-normal-leger text-center" style="width: 6%"></td>
            </tr>
            <tr>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center">NILAI</td>
                <td class="font-normal-leger text-center">DIKAT</td>
                <td class="font-normal-leger text-center" style="width: 5%;"></td>
                <td class="font-normal-leger text-center" style="width: 6%"></td>
            </tr>
            <tr>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger">MATA PELAJARAN</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center" style="width: 5%;"></td>
                <td class="font-normal-leger text-center" style="width: 6%"></td>
            </tr>
            <tr>
                <td class="font-normal-leger text-center rotate" rowspan="2">
                    <div>SIKAP</div>
                </td>
                <td class="font-normal-leger">SIKAP SPIRITUAL</td>
                <td class="font-normal-leger text-center" colspan="5">{{ $nilai_sikap['sm_1_spiritual'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_2_spiritual'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_3_spiritual'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_4_spiritual'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_5_spiritual'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_6_spiritual'] }}</td>
                <td class="font-normal-leger text-center" colspan="2"></td>
            </tr>
            <tr>
                <td class="font-normal-leger">SIKAP SOSIAL</td>
                <td class="font-normal-leger text-center" colspan="5">{{ $nilai_sikap['sm_1_sosial'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_2_sosial'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_3_sosial'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_4_sosial'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_5_sosial'] }}</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $nilai_sikap['sm_6_sosial'] }}</td>
                <td class="font-normal-leger text-center" colspan="2"></td>
            </tr>
            <tr>
                <td class="font-normal-leger" colspan="2">PENGETAHUAN DAN KETERAMPILAN</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger" colspan="2">KELOMPOK A</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            @foreach ($mapel->where('kelompok', 'A') as $item)
                <tr>
                    <td class="font-normal-leger text-center">{{ $loop->iteration }}</td>
                    <td class="font-normal-leger">{{ $item->nama }}</td>
                    <td class="font-normal-leger text-center"></td>
                    {{-- semester 1 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_1']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_1_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_1']['kel_a'][$loop->iteration + $loop->iteration - 2]['predikat_sm_1_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_1']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_1_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_1']['kel_a'][$loop->iteration + $loop->iteration - 1]['predikat_sm_1_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 2 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_2']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_2_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_2']['kel_a'][$loop->iteration + $loop->iteration - 2]['predikat_sm_2_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_2']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_2_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_2']['kel_a'][$loop->iteration + $loop->iteration - 1]['predikat_sm_2_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 3 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_3']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_3_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_3']['kel_a'][$loop->iteration + $loop->iteration - 2]['predikat_sm_3_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_3']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_3_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_3']['kel_a'][$loop->iteration + $loop->iteration - 1]['predikat_sm_3_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 4 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_4']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_4_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_4']['kel_a'][$loop->iteration + $loop->iteration - 2]['predikat_sm_4_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_4']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_4_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_4']['kel_a'][$loop->iteration + $loop->iteration - 1]['predikat_sm_4_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 5 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_5_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 2]['predikat_sm_5_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_5_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_5']['kel_a'][$loop->iteration + $loop->iteration - 1]['predikat_sm_5_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 6 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_6']['kel_a'][$loop->iteration + $loop->iteration - 2]['sm_6_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_6']['kel_a'][$loop->iteration + $loop->iteration - 2]['predikat_sm_6_a_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_6']['kel_a'][$loop->iteration + $loop->iteration - 1]['sm_6_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_6']['kel_a'][$loop->iteration + $loop->iteration - 1]['predikat_sm_6_a_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    <td class="font-normal-leger text-center">
                        {{ $nilai_ijazah['a'][$loop->iteration - 1]['nilai_ijazah_a_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai_ijazah['a'][$loop->iteration - 1]['predikat_nilai_ijazah_a_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="font-normal-leger text-center">&nbsp;</td>
                <td class="font-normal-leger"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger" colspan="2">KELOMPOK B</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            @foreach ($mapel->where('kelompok', 'B') as $item)
                <tr>
                    <td class="font-normal-leger text-center">{{ $loop->iteration }}</td>
                    <td class="font-normal-leger">
                        @if ($item->nama == "PRAKARYA / TIK")
                            PRAKARYA
                        @else
                            {{ $item->nama }}
                        @endif
                    </td>
                    <td class="font-normal-leger text-center"></td>

                    {{-- semester 1 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_1_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 2]['predikat_sm_1_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? ''}} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_1_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? ''}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_1']['kel_b'][$loop->iteration + $loop->iteration - 1]['predikat_sm_1_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? ''}} --}}
                    </td>

                    {{-- semester 2 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_2_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 2]['predikat_sm_2_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_2_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_2']['kel_b'][$loop->iteration + $loop->iteration - 1]['predikat_sm_2_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>

                    {{-- semester 3 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_3_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 2]['predikat_sm_3_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_3_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_3']['kel_b'][$loop->iteration + $loop->iteration - 1]['predikat_sm_3_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>

                    {{-- semester 4 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_4_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 2]['predikat_sm_4_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_4_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_4']['kel_b'][$loop->iteration + $loop->iteration - 1]['predikat_sm_4_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>


                    {{-- semester 5 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_5_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 2]['predikat_sm_5_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_5_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_5']['kel_b'][$loop->iteration + $loop->iteration - 1]['predikat_sm_5_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>

                    {{-- semester 6 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 2]['sm_6_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 2]['predikat_sm_6_b_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 1]['sm_6_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_6']['kel_b'][$loop->iteration + $loop->iteration - 1]['predikat_sm_6_b_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>

                    <td class="font-normal-leger text-center">
                        {{ $nilai_ijazah['b'][$loop->iteration - 1]['nilai_ijazah_b_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai_ijazah['b'][$loop->iteration - 1]['predikat_nilai_ijazah_b_' . str_replace(' ', '_', '' . $item->nama . '')] ?? '' }} --}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="font-normal-leger text-center">&nbsp;</td>
                <td class="font-normal-leger"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            @foreach ($mapel->where('kelompok', 'EKTRAKURIKULER') as $item)
                <tr>
                    @if ($loop->iteration == 1)
                        <td class="text-center rotate" rowspan="5">
                            <div style="font-size: 8px">PD/EKSTRAKURIKULER</div>
                        </td>
                    @endif
                    <td class="font-normal-leger">{{ $loop->iteration }}. {{ $item->nama }}</td>
                    <td class="font-normal-leger text-center"></td>

                    {{-- semester 1 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_1']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_1_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_1']['kel_c'][$loop->iteration + $loop->iteration - 2]['predikat_sm_1_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_1']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_1_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_1']['kel_c'][$loop->iteration + $loop->iteration - 1]['predikat_sm_1_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 2 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_2']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_2_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_2']['kel_c'][$loop->iteration + $loop->iteration - 2]['predikat_sm_2_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_2']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_2_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_2']['kel_c'][$loop->iteration + $loop->iteration - 1]['predikat_sm_2_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 3 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_3']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_3_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_3']['kel_c'][$loop->iteration + $loop->iteration - 2]['predikat_sm_3_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_3']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_3_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_3']['kel_c'][$loop->iteration + $loop->iteration - 1]['predikat_sm_3_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 4 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_4']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_4_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_4']['kel_c'][$loop->iteration + $loop->iteration - 2]['predikat_sm_4_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_4']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_4_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_4']['kel_c'][$loop->iteration + $loop->iteration - 1]['predikat_sm_4_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 5 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_5']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_5_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_5']['kel_c'][$loop->iteration + $loop->iteration - 2]['predikat_sm_5_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_5']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_5_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_5']['kel_c'][$loop->iteration + $loop->iteration - 1]['predikat_sm_5_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    {{-- semester 6 --}}
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_6']['kel_c'][$loop->iteration + $loop->iteration - 2]['sm_6_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_6']['kel_c'][$loop->iteration + $loop->iteration - 2]['predikat_sm_6_c_pengetahuan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{ $nilai['semester_6']['kel_c'][$loop->iteration + $loop->iteration - 1]['sm_6_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }}
                    </td>
                    <td class="font-normal-leger text-center">
                        {{-- {{ $nilai['semester_6']['kel_c'][$loop->iteration + $loop->iteration - 1]['predikat_sm_6_c_keterampilan_' . str_replace(' ', '_', '' . $item->nama . '')] }} --}}
                    </td>

                    <td class="font-normal-leger text-center"></td>
                    <td class="font-normal-leger text-center"></td>
                </tr>
            @endforeach
            <tr>
                <td class="font-normal-leger">2.</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger">3.</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger">4.</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger">5.</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="text-center rotate" rowspan="3">
                    <div style="font-size: 7.8px;">KETIDAKHADIRAN</div>
                </td>
                <td class="font-normal-leger" style="padding-top: 5px;padding-bottom: 5px;">SAKIT</td>
                <td class="font-normal-leger text-center" colspan="5">{{ $kehadiran['sm_1_sakit'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_2_sakit'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_3_sakit'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_4_sakit'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_5_sakit'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_6_sakit'] }} Hari</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger" style="padding-top: 5px;padding-bottom: 5px;">IZIN</td>
                <td class="font-normal-leger text-center" colspan="5">{{ $kehadiran['sm_1_izin'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_2_izin'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_3_izin'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_4_izin'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_5_izin'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_6_izin'] }} Hari</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger" style="padding-top: 5px;padding-bottom: 5px;">TANPA KETERANGAN</td>
                <td class="font-normal-leger text-center" colspan="5">{{ $kehadiran['sm_1_alpa'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_2_alpa'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_3_alpa'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_4_alpa'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_5_alpa'] }} Hari</td>
                <td class="font-normal-leger text-center" colspan="4">{{ $kehadiran['sm_6_alpa'] }} Hari</td>
                <td class="font-normal-leger text-center"></td>
                <td class="font-normal-leger text-center"></td>
            </tr>
            <tr>
                <td class="font-normal-leger text-center align-middle double-height" colspan="2">STATUS AKHIR
                    TAHUN</td>
                <td class="font-normal-leger text-center align-middle" colspan="9">
                    {{ $status_akhir_tahun['kelas_7'] }}</td>
                <td class="font-normal-leger text-center align-middle" colspan="8">
                    {{ $status_akhir_tahun['kelas_8'] }}</td>
                <td class="font-normal-leger text-center align-middle" colspan="8">
                    {{ $status_akhir_tahun['kelas_9'] }}</td>
                <td class="font-normal-leger text-center align-middle" colspan="2">
                    @if (strtoupper($status_akhir_tahun['status_akhir']) == 'LULUS')
                        LULUS / <del>TIDAK LULUS</del>
                    @else
                        <del>LULUS</del> / TIDAK LULUS
                    @endif
                </td>
            </tr>
            {{-- <tr>
                <td class="font-normal-leger text-center align-middle" rowspan="2" colspan="2">STATUS AKHIR
                    TAHUN</td>
                <td class="font-normal-leger text-center" style="font-size: 8px">NAIK KE</td>
                <td class="font-normal-leger text-center align-middle" rowspan="2" colspan="8">KELAS</td>
                <td class="font-normal-leger text-center" style="font-size: 8px">NAIK KE</td>
                <td class="font-normal-leger text-center align-middle" rowspan="2" colspan="7">KELAS</td>
                <td class="font-normal-leger text-center" style="font-size: 8px">NAIK KE</td>
                <td class="font-normal-leger text-center align-middle" rowspan="2" colspan="7">KELAS</td>
                <td class="font-normal-leger text-center align-middle" rowspan="2" colspan="2">LULUS / TIDAK
                    LULUS</td>
            </tr>
            <tr>
                <td class="font-normal-leger text-center" style="font-size: 8px">TINGGAL</td>
                <td class="font-normal-leger text-center" style="font-size: 8px">TINGGAL</td>
                <td class="font-normal-leger text-center" style="font-size: 8px">TINGGAL</td>
            </tr> --}}
        </table>
        <br>
        <br>
        <table style="width: 100%">
            <tr>
                <td style="width: 30%;text-align: center">MENGETAHUI</td>
                <td style="width: 20%">Sumenep,</td>
                <td style="width: 20%">Sumenep,</td>
                <td>Sumenep,</td>
            </tr>
            <tr>
                <td style="width: 20%;text-align: center">Kepala SMPN 1 Sumenep</td>
                <td style="padding-left: 100px">Wali Kelas</td>
                <td style="padding-left: 100px">Wali Kelas</td>
                <td style="padding-left: 100px">Wali Kelas</td>
            </tr>
            <tr>
                <td style="width: 20%;padding-top: 70px;text-align: center"> <u>{{ $config->nama }}</u></td>
                <td style="padding-top: 70px;">...........................................................</td>
                <td style="padding-top: 70px;">...........................................................</td>
                <td style="padding-top: 70px;">...........................................................</td>
            </tr>
            <tr>
                <td style="width: 20%;text-align: center">{{ $config->jabatan }}<br>NIP. {{ $config->nip }}</td>
                <td>NIP. </td>
                <td>NIP. </td>
                <td>NIP. </td>
            </tr>
        </table>
    @endif

</body>

</html>
