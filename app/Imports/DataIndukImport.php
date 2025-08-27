<?php

namespace App\Imports;

use App\Models\DataInduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataIndukImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data_siswa = [
            'nama_lengkap'      => $row['nama'],
            'nama_panggilan'    => $row['nama_panggilan'],
            'tempat_lahir'      => $row['tmp_lahir'],
            'tgl_lahir'         => $row['tgl_lahir'],
            'agama'             => $row['agama'],
            'kewarganegaraan'   => null,
            'sdr_kandung'       => $row['jml_saudara_kandung'],
            'sdr_tiri'          => $row['jml_saudara_tiri'],
            'sdr_angkat'        => $row['jml_saudara_angkat'],
            'status_anak'       => $row['status_anak'], //anak yatim/piatu/yatim piatu
            'bahasa'            => $row['bahasa_sehari']
        ];

        $tmp_tinggal = [
            'alamat'            => $row['alamat'],
            'no_telepon'        => $row['hp'],
            'status_tinggal'    => $row['status_tinggal'],
            'jarak_tinggal'     => $row['jarak_ke_sekolah']." km" //jarak tinggal dari rumah ke sekolah
        ];

        $ket_sehat  = [
            'gol_darah'         => $row['gol_darah'],
            'history_sakit'     => $row['penyakit'], //Penyakit yang pernah diderita		
            'kelainan'          => $row['kelainan_jasmani'],
            'tinggi'            => $row['tinggi_badan'],
            'berat'             => $row['berat_badan']		
        ];

        $pendidikan_sebelumnya = [
            'tamatan'           => $row['sekolah_asal'],
            'tgl_nmr_ijasah'    => $row['no_seri_ijazah'], //Tanggal dan nomor STTB/Ijasah	
            'tgl_nmr_shun'      => $row['no_seri_shun'], //Tanggal dan nomor SHUN	
            'lama_belajar'      => $row['lama_belajar']			
        ];

        $pindahan = [
            'dari_sekolah'      => $row['pindah_dari_sekolah'],
            'alasan'            => $row['alasan']
        ];

        $diterima = [
            'di_kelas'          => $row['diterima_kelas'],
            'kelompok'          => $row['kelompok'],
            'tanggal_diterima'  => $row['tgl']
        ];

        $ket_pendidikan = [
            'pendidikan_sebelumnya' => $pendidikan_sebelumnya,
            'pindahan'              => $pindahan,
            'diterima'              => $diterima
        ];

        $ket_ayah_kandung = [
            'nama'              => $row['a_nama'],
            'tempat_lahir'      => null,
            'tgl_lahir'         => $row['a_thn_lahir'],
            'agama'             => null,
            'kewarganegaraan'   => null,
            'pendidikan'        => $row['a_pendidikan'],
            'pekerjaan'         => $row['a_pekerjaan'],
            'pengeluaran'       => null,
            'alamat'            => null,
            'no_telepon'        => null,
            'status_hidup'      => null
        ];

        $ket_ibu_kandung = [
            'nama'              => $row['i_nama'],
            'tempat_lahir'      => null,
            'tgl_lahir'         => $row['i_thn_lahir'],
            'agama'             => null,
            'kewarganegaraan'   => null,
            'pendidikan'        => $row['i_pendidikan'],
            'pekerjaan'         => $row['i_pekerjaan'],
            'pengeluaran'       => null,
            'alamat'            => null,
            'no_telepon'        => null,
            'status_hidup'      => null
        ];

        $ket_wali = [
            'nama'              => $row['w_nama'],
            'tempat_lahir'      => null,
            'tgl_lahir'         => $row['w_thn_lahir'],
            'agama'             => null,
            'kewarganegaraan'   => null,
            'pendidikan'        => $row['w_pendidikan'],
            'pekerjaan'         => $row['w_pekerjaan'],
            'pengeluaran'       => null,
            'alamat'            => null,
            'no_telepon'        => null,
        ];

        $kegemaran = [
            'kesenian'          => null,
            'olahraga'          => null,
            'organisasi'        => null,
            'lain_lain'         => null
        ];

        $meninggalkan_sekolah = [
            'tgl_meninggalkan_sekolah'      => null,
            'alasan_meninggalkan_sekolah'   => null,
        ];

        $akhir_pendidikan   = [
            'tanggal_lulus'         => null,
            'nomor_ijazah'          => $row['no_seri_ijazah'],
            'nomor_shun'            => $row['no_seri_shun']
        ];

        $ket_pengembangan = [
            'meninggalkan_sekolah'  => $meninggalkan_sekolah,
            'akhir_pendidikan'      => $akhir_pendidikan
        ];

        $bekerja = [
            'tanggal_mulai_bekerja' => null,
            'nama_perusahaan'       => null,
            'penghasilan'           => null,
        ];

        $ket_selesai_pendidikan = [
            'melanjutkan_ke'        => null,
            'bekerja'               => $bekerja
        ];

        $micro_id = explode(" ", microtime());
        $micro_id = $micro_id[1].substr($micro_id[0],2,6);
        return DataInduk::updateOrCreate([
            'nik'                   => $row['nik'],
        ],[
            'id'                    => $micro_id,
            'nama'                  => $row['nama'],
            'nisn'                  => $row['nisn'],
            'nis'                   => $row['nipd'],
            'nik'                   => $row['nik'],
            'kelas'                 => $row['kelas'],
            'jenis_kelamin'         => $row['jenkel'],
            'data_siswa'            => json_encode($data_siswa),
            'tempat_tinggal'        => json_encode($tmp_tinggal),
            'ket_sehat'             => json_encode($ket_sehat),
            'ket_pendidikan'        => json_encode($ket_pendidikan),
            'ayah_kandung'          => json_encode($ket_ayah_kandung),
            'ibu_kandung'           => json_encode($ket_ibu_kandung),
            'wali'                  => json_encode($ket_wali),
            'kegemaran'             => json_encode($kegemaran),
            'ket_pengembangan'      => json_encode($ket_pengembangan),
            'ket_selesai_pendidikan'=> json_encode($ket_selesai_pendidikan),
        ]);
    }
}
