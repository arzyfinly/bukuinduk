<?php

namespace App\Exports;

use App\Models\{DataPegawai,Jurusan};
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataPegawaiExport implements FromCollection, WithMapping, WithHeadings, WithEvents, ShouldAutoSize
{
    public function collection()
    {
        return DataPegawai::all();
    }

    public function registerEvents(): array
    {
        $date = date('d-m-Y/H:i:s');
        return [
            // Handle by a closure.
            
            BeforeSheet::class => function(BeforeSheet $event)use($date){
                $event->sheet->setCellValue('A1','');
                $event->sheet->setCellValue('A2','BIODATA PEGAWAI');
                $event->sheet->setCellValue('A3',"Tanggal ,$date");
                $event->sheet->setCellValue('A4','');
            }
                        
        ];
    }

    public function map($pegawai) : array {
        $i=0;
        return [
            $i+1,
            $pegawai->nama,
            $pegawai->nip,
            $pegawai->jenis_kelamin,
            $pegawai->tempat_lahir,
            $pegawai->tanggal_lahir,
            $pegawai->nik,
            $pegawai->nuptk,
            // $pegawai->npwp,  
            $pegawai->email,
            Jurusan::find($pegawai->jurusan_id)->jurusan,
            $pegawai->tmt_tugas,
            $pegawai->tmt_pangkat,
            $pegawai->masa_kerja,
            $pegawai->tmt_pns,
            $pegawai->tmt_pensiun,
        ];
    }

    public function headings(): array
    {
        return [
             'No',
             'Nama',
             'NIP',
             'Jenis Kelamin',
             'Tempat Lahir',
             'Tanggal Lahir',
             'NIK',
             'NUPTK',
            //  'NPWP',
             'Email',
             'Jurusan',
             'TMT Tugas',
             'TMT Pangkat',
             'Masa Kerja/(tahun)',
             'TMT PNS',
             'TMT Pensiun',
        ];
    }
}
