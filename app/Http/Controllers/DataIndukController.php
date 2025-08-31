<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DataInduk,Mapel,ConfigKepalaSekolah,DataPegawai};
use App\Imports\DataIndukImport;
use Excel;
use DataTables;
use Response;
use Validator;

use PDF;

class DataIndukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $data = DataInduk::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('nama', function($row){
                return $row->nama ;
            })
            ->addColumn('nisn', function($row){
                return $row->nisn ;
            })
            ->addColumn('nik', function($row){
                return $row->nik ;
            })
            ->addColumn('kelas', function($row){
                return $row->kelas ;
            })
            ->addColumn('jenis_kelamin', function($row){
                return $row->jenis_kelamin ;
            })
            ->addColumn('nilai', function($row){
                $button  = '';
                if(is_null($row->nilai)){
                    $button .= '<a href="'.route('data-induk.insert-nilai',$row->id).'" class="btn btn-sm btn-secondary">Insert Nilai</a>';
                }
                else{
                    $button .= '<a href="'.route('data-induk.edit-nilai',$row->id).'" class="btn btn-sm btn-success">Update Nilai</a>';
                }
                return $button;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '<a href="'.route('data-induk.export-pdf',$row->id).'" target="_blank" class="btn btn-sm btn-secondary btn-icon btn-round"><i class="fas fa-print fa-circle mt-2"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('data-induk.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->nama.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action','nilai'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.data-induk.index',compact('data'));
    }

    public function create(){

        return view('pages.data-induk.create');
    }

    // public function import(){
    //     $data = public_path('excel/ImportBukuInduk.xlsx');
    //     // dd($data);
    //     Excel::import(new DataIndukImport,$data);
    // }

    public function downloadTemplate(){

        $data = public_path('excel/ImportBukuInduk.xlsx');
        return Response::download($data);

    }

    public function importDataInduk(Request $request){

        $validator = Validator::make($request->all(),[
            'file' => 'required|max:50000|mimes:xlsx,application/csv,application/excel,application/vnd.ms-excel, application/vnd.msexcel',//file|mimes:xls,xlsx|
        ],[
            'file.required'  => 'File harus diiisi',
        ]);

        if($validator->fails()){
            toast(''.$validator->getMessageBag()->first().'','error');
            return redirect()->route('data-induk.index');
        }

        Excel::import(new DataIndukImport(),request()->file('file'));
        toast('File berhasil di Import!','success');
        return redirect()->route('data-induk.index');
    }

    public function store(Request $request){

        $request->validate([
            'nis'          => 'required|unique:data_induk,nis',
            'nisn'          => 'required|unique:data_induk,nisn',
            'nik'           => 'required|unique:data_induk,nik',
            'nama_lengkap'  => 'required|unique:data_induk,nama',
            'kelas'         => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'required',
            'alamat'        => 'required',
        ]);

        $data       = $request->all();
        $data_siswa = [
            'nama_lengkap'      => $data['nama_lengkap'],
            'nama_panggilan'    => $data['nama_panggilan'],
            'tempat_lahir'      => $data['tempat_lahir'],
            'tgl_lahir'         => $data['tgl_lahir'],
            'agama'             => $data['agama'],
            'kewarganegaraan'   => $data['kewarganegaraan'],
            'sdr_kandung'       => $data['sdr_kandung'],
            'sdr_tiri'          => $data['sdr_tiri'],
            'sdr_angkat'        => $data['sdr_angkat'],
            'status_anak'       => $data['status_anak'], //anak yatim/piatu/yatim piatu
            'bahasa'            => $data['bahasa']
        ];

        $tmp_tinggal = [
            'alamat'            => $data['alamat'],
            'no_telepon'        => $data['no_telepon'],
            'status_tinggal'    => $data['status_tinggal'],
            'jarak_tinggal'     => $data['jarak_tinggal'] //jarak tinggal dari rumah ke sekolah
        ];

        $ket_sehat  = [
            'gol_darah'         => $data['gol_darah'],
            'history_sakit'     => $data['history_sakit'], //Penyakit yang pernah diderita
            'kelainan'          => $data['kelainan'],
            'tinggi'            => $data['tinggi'],
            'berat'             => $data['berat']
        ];

        $pendidikan_sebelumnya = [
            'tamatan'           => $data['tamatan'],
            'tgl_nmr_ijasah'    => $data['tgl_nmr_ijasah'], //Tanggal dan nomor STTB/Ijasah
            'tgl_nmr_shun'      => $data['tgl_nmr_ijasah'], //Tanggal dan nomor SHUN
            'lama_belajar'      => $data['lama_belajar']
        ];

        $pindahan = [
            'dari_sekolah'      => $data['dari_sekolah'],
            'alasan'            => $data['alasan']
        ];

        $diterima = [
            'di_kelas'          => $data['dikelas'],
            'kelompok'          => $data['kelompok'],
            'tanggal_diterima'  => $data['tanggal_diterima']
        ];

        $ket_pendidikan = [
            'pendidikan_sebelumnya' => $pendidikan_sebelumnya,
            'pindahan'              => $pindahan,
            'diterima'              => $diterima
        ];

        $ket_ayah_kandung = [
            'nama'              => $data['a_nama'],
            'tempat_lahir'      => $data['a_tempat_lahir'],
            'tgl_lahir'         => $data['a_tgl_lahir'],
            'agama'             => $data['a_agama'],
            'kewarganegaraan'   => $data['a_kewarganegaraan'],
            'pendidikan'        => $data['a_pendidikan'],
            'pekerjaan'         => $data['a_pekerjaan'],
            'pengeluaran'       => $data['a_pengeluaran'],
            'alamat'            => $data['a_alamat'],
            'no_telepon'        => $data['a_no_telepon'],
            'status_hidup'      => $data['a_status_hidup']
        ];

        $ket_ibu_kandung = [
            'nama'              => $data['i_nama'],
            'tempat_lahir'      => $data['i_tempat_lahir'],
            'tgl_lahir'         => $data['i_tgl_lahir'],
            'agama'             => $data['i_agama'],
            'kewarganegaraan'   => $data['i_kewarganegaraan'],
            'pendidikan'        => $data['i_pendidikan'],
            'pekerjaan'         => $data['i_pekerjaan'],
            'pengeluaran'       => $data['i_pengeluaran'],
            'alamat'            => $data['i_alamat'],
            'no_telepon'        => $data['i_no_telepon'],
            'status_hidup'      => $data['i_status_hidup']
        ];

        $ket_wali = [
            'nama'              => $data['w_nama'],
            'tempat_lahir'      => $data['w_tempat_lahir'],
            'tgl_lahir'         => $data['w_tgl_lahir'],
            'agama'             => $data['w_agama'],
            'kewarganegaraan'   => $data['w_kewarganegaraan'],
            'pendidikan'        => $data['w_pendidikan'],
            'pekerjaan'         => $data['w_pekerjaan'],
            'pengeluaran'       => $data['w_pengeluaran'],
            'alamat'            => $data['w_alamat'],
            'no_telepon'        => $data['w_no_telepon'],
        ];

        $kegemaran = [
            'kesenian'          => $data['kesenian'],
            'olahraga'          => $data['olahraga'],
            'organisasi'        => $data['organisasi'],
            'lain_lain'         => $data['lain_lain']
        ];

        $meninggalkan_sekolah = [
            'tgl_meninggalkan_sekolah'      => $data['tgl_meninggalkan_sekolah'],
            'alasan_meninggalkan_sekolah'   => $data['alasan_meninggalkan_sekolah'],
        ];

        $akhir_pendidikan   = [
            'tanggal_lulus'         => $data['tanggal_lulus'],
            'nomor_ijazah'          => $data['nomor_ijazah'],
            'nomor_shun'            => $data['nomor_shun']
        ];

        $ket_pengembangan = [
            'meninggalkan_sekolah'  => $meninggalkan_sekolah,
            'akhir_pendidikan'      => $akhir_pendidikan
        ];

        $bekerja = [
            'tanggal_mulai_bekerja' => $data['tanggal_mulai_bekerja'],
            'nama_perusahaan'       => $data['nama_perusahaan'],
            'penghasilan'           => $data['penghasilan'],
        ];

        $ket_selesai_pendidikan = [
            'melanjutkan_ke'        => $data['melanjutkan_ke'],
            'bekerja'               => $bekerja
        ];

        $micro_id = explode(" ", microtime());
        $micro_id = $micro_id[1].substr($micro_id[0],2,6);

        $bukuInduk = DataInduk::create([
            'id'                    => $micro_id,
            'nama'                  => $data['nama_lengkap'],
            'nis'                  => $data['nis'],
            'nisn'                  => $data['nisn'],
            'nik'                   => $data['nik'],
            'kelas'                 => $data['kelas'],
            'jenis_kelamin'         => $data['jenis_kelamin'],
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
            'foto'                  => $request->file('foto') ? $data['foto'] : NULL
        ]);
        if($bukuInduk){
            toast('Data Induk berhasil ditambahkan!','success');
            return redirect()->route('data-induk.index');
        }
        toast('Data Induk gagal ditambahkan!','error');
        return redirect()->route('data-induk.index');

    }

    public function edit($id){

        $data = DataInduk::findOrFail($id);
        $data_siswa            = json_decode($data->data_siswa);
        $tempat_tinggal        = json_decode($data->tempat_tinggal);
        $ket_sehat             = json_decode($data->ket_sehat);
        $ket_pendidikan        = json_decode($data->ket_pendidikan);
        $ayah_kandung          = json_decode($data->ayah_kandung);
        $ibu_kandung           = json_decode($data->ibu_kandung);
        $wali                  = json_decode($data->wali);
        $kegemaran             = json_decode($data->kegemaran);
        $ket_pengembangan      = json_decode($data->ket_pengembangan);
        $ket_selesai_pendidikan= json_decode($data->ket_selesai_pendidikan);
        return view('pages.data-induk.edit',compact('data','data_siswa','tempat_tinggal','ket_sehat',
            'ket_pendidikan','ayah_kandung','ibu_kandung','wali','kegemaran','ket_pengembangan','ket_selesai_pendidikan'));

    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'nisn'          => 'required',
            'nik'           => 'required',
            'nama_lengkap'  => 'required',
            'kelas'         => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'required',
            'alamat'        => 'required',
        ]);

        $data       = $request->all();
        // dd($data);
        $data_siswa = [
            'nama_lengkap'      => $data['nama_lengkap'],
            'nama_panggilan'    => $data['nama_panggilan'],
            'tempat_lahir'      => $data['tempat_lahir'],
            'tgl_lahir'         => $data['tgl_lahir'],
            'agama'             => $data['agama'],
            'kewarganegaraan'   => $data['kewarganegaraan'],
            'sdr_kandung'       => $data['sdr_kandung'],
            'sdr_tiri'          => $data['sdr_tiri'],
            'sdr_angkat'        => $data['sdr_angkat'],
            'status_anak'       => $data['status_anak'], //anak yatim/piatu/yatim piatu
            'bahasa'            => $data['bahasa']
        ];

        $tmp_tinggal = [
            'alamat'            => $data['alamat'],
            'no_telepon'        => $data['no_telepon'],
            'status_tinggal'    => $data['status_tinggal'],
            'jarak_tinggal'     => $data['jarak_tinggal'] //jarak tinggal dari rumah ke sekolah
        ];

        $ket_sehat  = [
            'gol_darah'         => $data['gol_darah'],
            'history_sakit'     => $data['history_sakit'], //Penyakit yang pernah diderita
            'kelainan'          => $data['kelainan'],
            'tinggi'            => $data['tinggi'],
            'berat'             => $data['berat']
        ];

        $pendidikan_sebelumnya = [
            'tamatan'           => $data['tamatan'],
            'tgl_nmr_ijasah'    => $data['tgl_nmr_ijasah'], //Tanggal dan nomor STTB/Ijasah
            'tgl_nmr_shun'      => $data['tgl_nmr_ijasah'], //Tanggal dan nomor SHUN
            'lama_belajar'      => $data['lama_belajar']
        ];

        $pindahan = [
            'dari_sekolah'      => $data['dari_sekolah'],
            'alasan'            => $data['alasan']
        ];

        $diterima = [
            'di_kelas'          => $data['dikelas'],
            'kelompok'          => $data['kelompok'],
            'tanggal_diterima'  => $data['tanggal_diterima']
        ];

        $ket_pendidikan = [
            'pendidikan_sebelumnya' => $pendidikan_sebelumnya,
            'pindahan'              => $pindahan,
            'diterima'              => $diterima
        ];

        $ket_ayah_kandung = [
            'nama'              => $data['a_nama'],
            'tempat_lahir'      => $data['a_tempat_lahir'],
            'tgl_lahir'         => $data['a_tgl_lahir'],
            'agama'             => $data['a_agama'],
            'kewarganegaraan'   => $data['a_kewarganegaraan'],
            'pendidikan'        => $data['a_pendidikan'],
            'pekerjaan'         => $data['a_pekerjaan'],
            'pengeluaran'       => $data['a_pengeluaran'],
            'alamat'            => $data['a_alamat'],
            'no_telepon'        => $data['a_no_telepon'],
            'status_hidup'      => $data['a_status_hidup']
        ];

        $ket_ibu_kandung = [
            'nama'              => $data['i_nama'],
            'tempat_lahir'      => $data['i_tempat_lahir'],
            'tgl_lahir'         => $data['i_tgl_lahir'],
            'agama'             => $data['i_agama'],
            'kewarganegaraan'   => $data['i_kewarganegaraan'],
            'pendidikan'        => $data['i_pendidikan'],
            'pekerjaan'         => $data['i_pekerjaan'],
            'pengeluaran'       => $data['i_pengeluaran'],
            'alamat'            => $data['i_alamat'],
            'no_telepon'        => $data['i_no_telepon'],
            'status_hidup'      => $data['i_status_hidup']
        ];

        $ket_wali = [
            'nama'              => $data['w_nama'],
            'tempat_lahir'      => $data['w_tempat_lahir'],
            'tgl_lahir'         => $data['w_tgl_lahir'],
            'agama'             => $data['w_agama'],
            'kewarganegaraan'   => $data['w_kewarganegaraan'],
            'pendidikan'        => $data['w_pendidikan'],
            'pekerjaan'         => $data['w_pekerjaan'],
            'pengeluaran'       => $data['w_pengeluaran'],
            'alamat'            => $data['w_alamat'],
            'no_telepon'        => $data['w_no_telepon'],
        ];

        $kegemaran = [
            'kesenian'          => $data['kesenian'],
            'olahraga'          => $data['olahraga'],
            'organisasi'        => $data['organisasi'],
            'lain_lain'         => $data['lain_lain']
        ];

        $meninggalkan_sekolah = [
            'tgl_meninggalkan_sekolah'      => $data['tgl_meninggalkan_sekolah'],
            'alasan_meninggalkan_sekolah'   => $data['alasan_meninggalkan_sekolah'],
        ];

        $akhir_pendidikan   = [
            'tanggal_lulus'         => $data['tanggal_lulus'],
            'nomor_ijazah'          => $data['nomor_ijazah'],
            'nomor_shun'            => $data['nomor_shun']
        ];

        $ket_pengembangan = [
            'meninggalkan_sekolah'  => $meninggalkan_sekolah,
            'akhir_pendidikan'      => $akhir_pendidikan
        ];

        $bekerja = [
            'tanggal_mulai_bekerja' => $data['tanggal_mulai_bekerja'],
            'nama_perusahaan'       => $data['nama_perusahaan'],
            'penghasilan'           => $data['penghasilan'],
        ];

        $ket_selesai_pendidikan = [
            'melanjutkan_ke'        => $data['melanjutkan_ke'],
            'bekerja'               => $bekerja
        ];

        $bukuInduk = DataInduk::findOrFail($id);

        $bukuInduk->update([
            'nama'                  => $data['nama_lengkap'],
            // 'nis'                   => $data['nis'],
            'nisn'                  => $data['nisn'],
            'nik'                   => $data['nik'],
            'kelas'                 => $data['kelas'],
            'jenis_kelamin'         => $data['jenis_kelamin'],
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
            'foto'                  => $request->file('foto') ? $data['foto'] : NULL
        ]);
        if($bukuInduk){
            toast('Data Induk berhasil diupdate!','success');
            return redirect()->route('data-induk.index');
        }
        toast('Data Induk gagal diupdate!','error');
        return redirect()->route('data-induk.index');
    }

    public function destroy($id){

        $bukuInduk = DataInduk::findOrFail($id);
        if($bukuInduk){
            $bukuInduk->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data Induk berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Induk gagal dihapus!'
            ]);
        }
    }

    public function createNilai($id){

        $mapel = Mapel::all();
        $guru  = DataPegawai::whereIn('jenis_pns',[1,3,4])->get();
        $data  = DataInduk::find($id);
        return view('pages.nilai.create-new',compact('mapel','guru','data'));
    }

    private function predikat($value){
        if(is_null($value)){
            return "";
        }
        $nilai = (int)$value;
        if($nilai < 60){
            return 'D';
        }
        elseif($nilai < 70){
            return 'C';
        }
        elseif($nilai < 80){
            return 'B';
        }
        else{
            return 'A';
        }
    }

    public function storeNilaiIjazah(Request $request, $id){

        $data = $request->all();
        $nilai_kel_a   = [];
        $nilai_kel_b   = [];
        foreach($data as $key => $value){
            if($key != '_token'){
                if(substr($key,13,1) == 'a'){
                    $value  = [
                        ''.$key.''          => $value,
                        'predikat_'.$key.'' => $this->predikat($value),
                    ];
                    array_push($nilai_kel_a, $value);
                }else{
                    $value  = [
                        ''.$key.''          => $value,
                        'predikat_'.$key.'' => $this->predikat($value),
                    ];
                    array_push($nilai_kel_b, $value);
                }
            }
        }
        $nilai_ijazah = [
            'a' => $nilai_kel_a,
            'b' => $nilai_kel_b
        ];

        $nilai_ijazah = json_encode($nilai_ijazah);
        $data  = DataInduk::find($id);
        $data->update([
            'nilai_ijazah' => $nilai_ijazah
        ]);
        if(!$data->nilai){
            toast('Nilai mata pelajaran harus terisi lebih dahulu!','error');
            return redirect()->route('data-induk.insert-nilai',$id);
        }
        if($data){
            toast('Data Nilai Sikap berhasil disimpan!','success');
            return redirect()->route('data-induk.edit-nilai',$id);
        }
        toast('Data Nilai Sikap gagal disimpan!','error');
        return redirect()->route('data-induk.edit-nilai',$id);
    }

    public function storeNilaiSikap(Request $request, $id){

        $nilai_sikap = [
            'sm_1_spiritual' => $request->sm_1_spiritual,
            'sm_1_sosial'    => $request->sm_1_sosial,
            'sm_2_spiritual' => $request->sm_2_spiritual,
            'sm_2_sosial'    => $request->sm_2_sosial,
            'sm_3_spiritual' => $request->sm_3_spiritual,
            'sm_3_sosial'    => $request->sm_3_sosial,
            'sm_4_spiritual' => $request->sm_4_spiritual,
            'sm_4_sosial'    => $request->sm_4_sosial,
            'sm_5_spiritual' => $request->sm_5_spiritual,
            'sm_5_sosial'    => $request->sm_5_sosial,
            'sm_6_spiritual' => $request->sm_6_spiritual,
            'sm_6_sosial'    => $request->sm_6_sosial,
        ];

        $nilai = json_encode($nilai_sikap);
        $data  = DataInduk::find($id);
        $data->update([
            'sikap' => $nilai
        ]);
        if(!$data->nilai){
            toast('Nilai mata pelajaran harus terisi lebih dahulu!','error');
            return redirect()->route('data-induk.insert-nilai',$id);
        }
        if($data){
            toast('Data Nilai Sikap berhasil disimpan!','success');
            return redirect()->route('data-induk.edit-nilai',$id);
        }
        toast('Data Nilai Sikap gagal disimpan!','error');
        return redirect()->route('data-induk.edit-nilai',$id);

    }

    public function storeNilaiKehadiran(Request $request, $id){

        $nilai_kehadiran = [
            'sm_1_sakit'    => $request->sm_1_sakit,
            'sm_1_izin'     => $request->sm_1_izin,
            'sm_1_alpa'     => $request->sm_1_alpa,
            'sm_2_sakit'    => $request->sm_2_sakit,
            'sm_2_izin'     => $request->sm_2_izin,
            'sm_2_alpa'     => $request->sm_2_alpa,
            'sm_3_sakit'    => $request->sm_3_sakit,
            'sm_3_izin'     => $request->sm_3_izin,
            'sm_3_alpa'     => $request->sm_3_alpa,
            'sm_4_sakit'    => $request->sm_4_sakit,
            'sm_4_izin'     => $request->sm_4_izin,
            'sm_4_alpa'     => $request->sm_4_alpa,
            'sm_5_sakit'    => $request->sm_5_sakit,
            'sm_5_izin'     => $request->sm_5_izin,
            'sm_5_alpa'     => $request->sm_5_alpa,
            'sm_6_sakit'    => $request->sm_6_sakit,
            'sm_6_izin'     => $request->sm_6_izin,
            'sm_6_alpa'     => $request->sm_6_alpa
        ];

        $nilai = json_encode($nilai_kehadiran);
        $data  = DataInduk::find($id);
        $data->update([
            'kehadiran' => $nilai
        ]);
        if(!$data->nilai){
            toast('Nilai mata pelajaran harus terisi lebih dahulu!','error');
            return redirect()->route('data-induk.insert-nilai',$id);
        }
        if($data){
            toast('Data Nilai Kehadiran berhasil disimpan!','success');
            return redirect()->route('data-induk.edit-nilai',$id);
        }
        toast('Data Nilai Kehadiran gagal disimpan!','error');
        return redirect()->route('data-induk.edit-nilai',$id);
    }

    public function storeStatusAkhirTahun(Request $request, $id){

        $status_akhir = [
            'kelas_7'               => $request->status_kelas_7,
            'tahun_ajaran_kelas_7'  => $request->tahun_ajaran_kelas_7,
            'tanggal_akhir_tahun_7' => $request->tanggal_akhir_tahun_7,
            'wali_kelas_7'          => $request->wali_kelas_7,
            'kelas_8'               => $request->status_kelas_8,
            'tahun_ajaran_kelas_8'  => $request->tahun_ajaran_kelas_8,
            'tanggal_akhir_tahun_8' => $request->tanggal_akhir_tahun_8,
            'wali_kelas_8'          => $request->wali_kelas_8,
            'kelas_9'               => $request->status_kelas_9,
            'tahun_ajaran_kelas_9'  => $request->tahun_ajaran_kelas_9,
            'tanggal_akhir_tahun_9' => $request->tanggal_akhir_tahun_9,
            'wali_kelas_9'          => $request->wali_kelas_9,
            'status_akhir'          => $request->status_akhir
        ];

        $nilai = json_encode($status_akhir);
        $data  = DataInduk::find($id);
        $data->update([
            'status_akhir_tahun' => $nilai
        ]);
        if(!$data->nilai){
            toast('Nilai mata pelajaran harus terisi lebih dahulu!','error');
            return redirect()->route('data-induk.insert-nilai',$id);
        }
        if($data){
            toast('Data Nilai Kehadiran berhasil disimpan!','success');
            return redirect()->route('data-induk.edit-nilai',$id);
        }
        toast('Data Nilai Kehadiran gagal disimpan!','error');
        return redirect()->route('data-induk.edit-nilai',$id);
    }

    public function storeNilai(Request $request, $id){
        $data = $request->all();
        $sm1_kel_a   = [];
        $sm1_kel_b   = [];
        $sm1_kel_c   = [];

        $sm2_kel_a   = [];
        $sm2_kel_b   = [];
        $sm2_kel_c   = [];

        $sm3_kel_a   = [];
        $sm3_kel_b   = [];
        $sm3_kel_c   = [];

        $sm4_kel_a   = [];
        $sm4_kel_b   = [];
        $sm4_kel_c   = [];

        $sm5_kel_a   = [];
        $sm5_kel_b   = [];
        $sm5_kel_c   = [];

        $sm6_kel_a   = [];
        $sm6_kel_b   = [];
        $sm6_kel_c   = [];

        foreach($data as $key => $value){
            if($key != '_token'){
                if(substr($key,3,1) == '1'){
                    if(substr($key,5,1) == 'a'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm1_kel_a, $value);
                    }
                    if(substr($key,5,1) == 'b'){
                        $value  = [
                            ''.$key.'' => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm1_kel_b, $value);
                    }
                    if(substr($key,5,1) == 'c'){
                        $value  = [
                            ''.$key.'' => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm1_kel_c, $value);
                    }
                }
                if(substr($key,3,1) == '2'){
                    if(substr($key,5,1) == 'a'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm2_kel_a, $value);
                    }
                    if(substr($key,5,1) == 'b'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm2_kel_b, $value);
                    }
                    if(substr($key,5,1) == 'c'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm2_kel_c, $value);
                    }
                }
                if(substr($key,3,1) == '3'){
                    if(substr($key,5,1) == 'a'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm3_kel_a, $value);
                    }
                    if(substr($key,5,1) == 'b'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm3_kel_b, $value);
                    }
                    if(substr($key,5,1) == 'c'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm3_kel_c, $value);
                    }
                }
                if(substr($key,3,1) == '4'){
                    if(substr($key,5,1) == 'a'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm4_kel_a, $value);
                    }
                    if(substr($key,5,1) == 'b'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm4_kel_b, $value);
                    }
                    if(substr($key,5,1) == 'c'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm4_kel_c, $value);
                    }
                }
                if(substr($key,3,1) == '5'){
                    if(substr($key,5,1) == 'a'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm5_kel_a, $value);
                    }
                    if(substr($key,5,1) == 'b'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm5_kel_b, $value);
                    }
                    if(substr($key,5,1) == 'c'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm5_kel_c, $value);
                    }
                }
                if(substr($key,3,1) == '6'){
                    if(substr($key,5,1) == 'a'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm6_kel_a, $value);
                    }
                    if(substr($key,5,1) == 'b'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm6_kel_b, $value);
                    }
                    if(substr($key,5,1) == 'c'){
                        $value  = [
                            ''.$key.''          => $value,
                            'predikat_'.$key.'' => $this->predikat($value),
                        ];
                        array_push($sm6_kel_c, $value);
                    }
                }
            }
        }
        $semester_1 = [
            'kel_a' => $sm1_kel_a,
            'kel_b' => $sm1_kel_b,
            'kel_c' => $sm1_kel_c
        ];

        $nilai = [
            'semester_1' => [
                'kel_a' => $sm1_kel_a,
                'kel_b' => $sm1_kel_b,
                'kel_c' => $sm1_kel_c
            ],
            'semester_2' => [
                'kel_a' => $sm2_kel_a,
                'kel_b' => $sm2_kel_b,
                'kel_c' => $sm2_kel_c
            ],
            'semester_3' => [
                'kel_a' => $sm3_kel_a,
                'kel_b' => $sm3_kel_b,
                'kel_c' => $sm3_kel_c
            ],
            'semester_4' => [
                'kel_a' => $sm4_kel_a,
                'kel_b' => $sm4_kel_b,
                'kel_c' => $sm4_kel_c
            ],
            'semester_5' => [
                'kel_a' => $sm5_kel_a,
                'kel_b' => $sm5_kel_b,
                'kel_c' => $sm5_kel_c
            ],
            'semester_6' => [
                'kel_a' => $sm6_kel_a,
                'kel_b' => $sm6_kel_b,
                'kel_c' => $sm6_kel_c
            ],
        ];
        $nilai_kehadiran = [
            'sm_1_sakit'    => $request->sm_1_sakit,
            'sm_1_izin'     => $request->sm_1_izin,
            'sm_1_alpa'     => $request->sm_1_alpa,
            'sm_2_sakit'    => $request->sm_2_sakit,
            'sm_2_izin'     => $request->sm_2_izin,
            'sm_2_alpa'     => $request->sm_2_alpa,
            'sm_3_sakit'    => $request->sm_3_sakit,
            'sm_3_izin'     => $request->sm_3_izin,
            'sm_3_alpa'     => $request->sm_3_alpa,
            'sm_4_sakit'    => $request->sm_4_sakit,
            'sm_4_izin'     => $request->sm_4_izin,
            'sm_4_alpa'     => $request->sm_4_alpa,
            'sm_5_sakit'    => $request->sm_5_sakit,
            'sm_5_izin'     => $request->sm_5_izin,
            'sm_5_alpa'     => $request->sm_5_alpa,
            'sm_6_sakit'    => $request->sm_6_sakit,
            'sm_6_izin'     => $request->sm_6_izin,
            'sm_6_alpa'     => $request->sm_6_alpa
        ];
        $status_akhir = [
            'kelas_7'        => $request->status_kelas_7,
            'kelas_8'        => $request->status_kelas_8,
            'kelas_9'        => $request->status_kelas_9,
            'status_akhir'   => $request->status_akhir
        ];

        $nilai_sikap = [
            'sm_1_spiritual' => $request->sm_1_spiritual,
            'sm_1_sosial'    => $request->sm_1_sosial,
            'sm_2_spiritual' => $request->sm_2_spiritual,
            'sm_2_sosial'    => $request->sm_2_sosial,
            'sm_3_spiritual' => $request->sm_3_spiritual,
            'sm_3_sosial'    => $request->sm_3_sosial,
            'sm_4_spiritual' => $request->sm_4_spiritual,
            'sm_4_sosial'    => $request->sm_4_sosial,
            'sm_5_spiritual' => $request->sm_5_spiritual,
            'sm_5_sosial'    => $request->sm_5_sosial,
            'sm_6_spiritual' => $request->sm_6_spiritual,
            'sm_6_sosial'    => $request->sm_6_sosial,
        ];

        $nilai_kel_a   = [];
        $nilai_kel_b   = [];
        foreach($data as $key => $value){
            if($key != '_token'){
                if(substr($key,3,1) == '1'){
                    if(substr($key,5,1) == 'a'){
                        if(substr($key,7,11) == 'pengetahuan'){
                            $value  = [
                                ''.str_replace("sm_1_a_pengetahuan_","nilai_ijazah_a_",$key).''          => '',
                                'predikat_'.str_replace("sm_1_a_pengetahuan_","nilai_ijazah_a_",$key).'' => '',
                            ];
                            array_push($nilai_kel_a, $value);
                        }
                    }elseif(substr($key,5,1) == 'b'){
                        if(substr($key,7,11) == 'pengetahuan'){
                            $value  = [
                                ''.str_replace("sm_1_b_pengetahuan_","nilai_ijazah_b_",$key).''          => '',
                                'predikat_'.str_replace("sm_1_b_pengetahuan_","nilai_ijazah_b_",$key).'' => '',
                            ];
                            array_push($nilai_kel_b, $value);
                        }
                    }
                }
            }
        }
        $nilai_ijazah = [
            'a' => $nilai_kel_a,
            'b' => $nilai_kel_b
        ];

        $nilai_ijazah       = json_encode($nilai_ijazah);
        $nilai_sikap        = json_encode($nilai_sikap);
        $status_akhir       = json_encode($status_akhir);
        $nilai_kehadiran    = json_encode($nilai_kehadiran);
        $nilai              = json_encode($nilai);
        $data  = DataInduk::find($id)->update([
            'nilai'                 => $nilai,
            'sikap'                 => $nilai_sikap,
            'kehadiran'             => $nilai_kehadiran,
            'status_akhir_tahun'    => $status_akhir,
            'nilai_ijazah'          => $nilai_ijazah,
        ]);
        if($data){
            toast('Data Nilai berhasil disimpan!','success');
            return redirect()->route('data-induk.edit-nilai',$id);
        }
        toast('Data Nilai gagal disimpan!','error');
        return redirect()->route('data-induk.edit-nilai',$id);
    }

    public function editNilai($id){

        $mapel = Mapel::all();
        $guru  = DataPegawai::whereIn('jenis_pns',[1,3,4])->get();
        $data  = DataInduk::find($id);
        $nilai = json_decode($data->nilai,true);
        $sikap = json_decode($data->sikap,true);
        $kehadiran = json_decode($data->kehadiran,true);
        $status_akhir_tahun = json_decode($data->status_akhir_tahun,true);
        $nilai_ijazah = json_decode($data->nilai_ijazah,true);
        return view('pages.nilai.edit-new',compact('mapel','guru','data','nilai','sikap','kehadiran','status_akhir_tahun','nilai_ijazah'));
    }

    public function exportPDF($id){

        $data                  = DataInduk::find($id);
        $mapel                 = Mapel::all();
        $config                 = ConfigKepalaSekolah::first();
        $data_siswa            = json_decode($data->data_siswa);
        $tempat_tinggal        = json_decode($data->tempat_tinggal);
        $ket_sehat             = json_decode($data->ket_sehat);
        $ket_pendidikan        = json_decode($data->ket_pendidikan);
        $ayah_kandung          = json_decode($data->ayah_kandung);
        $ibu_kandung           = json_decode($data->ibu_kandung);
        $wali                  = json_decode($data->wali);
        $kegemaran             = json_decode($data->kegemaran);
        $ket_pengembangan      = json_decode($data->ket_pengembangan);
        $ket_selesai_pendidikan= json_decode($data->ket_selesai_pendidikan);
        $nilai                 = json_decode($data->nilai,true);
        $nilai_sikap           = json_decode($data->sikap,true);
        $kehadiran             = json_decode($data->kehadiran,true);
        $status_akhir_tahun    = json_decode($data->status_akhir_tahun,true);
        $nilai_ijazah          = json_decode($data->nilai_ijazah,true);
        // dd($nilai_ijazah);
        $pdf = PDF::loadView('pages.data-induk.buku-induk-pdf', compact('data','data_siswa','tempat_tinggal','ket_sehat',
        'ket_pendidikan','ayah_kandung','ibu_kandung','wali','kegemaran','ket_pengembangan','ket_selesai_pendidikan','nilai','nilai_sikap','kehadiran','nilai_ijazah','status_akhir_tahun','mapel','config'));
        $pdf->setPaper(array(0, 0, 841.89, 1190.55), 'landscape');
        return $pdf->stream('buku-induk'.$data_siswa->nama_lengkap.'.pdf');
        /* return view('pages.data-induk.buku-induk-pdf', compact('data','data_siswa','tempat_tinggal','ket_sehat',
        'ket_pendidikan','ayah_kandung','ibu_kandung','wali','kegemaran','ket_pengembangan','ket_selesai_pendidikan')); */
    }
}
