<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaksinasi extends Model
{
    protected $primaryKey = 'id_vaksinasi';
    
    protected $table = 'api_vaksinasi';
    
    protected $fillable = [
        'tanggal',
        'provinsi',
        'kabupaten',
        'kode_kecamatan',
        'kecamatan',
        'faskes',
        'nik',
        'nama',
        'jk',
        'kelompok_usia',
        'kategori',
        'sub_kategori',
        'vaksinasi',
        'tiket_vaksinasi',
        'jenis_vaksin',
    ];
}
