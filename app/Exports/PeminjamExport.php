<?php

namespace App\Exports;

use App\Models\Peminjam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
 

class PeminjamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peminjam::select(DB::raw('nama',
        'alamat',
        'no_telp',
        'barang',
        'jumlah',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'keterangan'))->get();
    }
}