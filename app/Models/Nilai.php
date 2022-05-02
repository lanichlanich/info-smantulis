<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_induk',
        'nama_lengkap',
        'tpt_lahir',
        'tgl_lahir',
        'nisn',
        'jurusan',
        'nilai_pabp',
        'nilai_ppkn',
        'nilai_bind',
        'nilai_mtk',
        'nilai_sej_indo',
        'nilai_bing',
        'nilai_seni',
        'nilai_pjok',
        'nilai_pkwu',
        'nilai_sunda',
        'nilai_mtk_geo',
        'nilai_bio_sej',
        'nilai_fis_sos',
        'nilai_kim_eko',
        'nilai_sos_jep',
        'rata_rata',
        'status',
        'url_file'
    ];
}
