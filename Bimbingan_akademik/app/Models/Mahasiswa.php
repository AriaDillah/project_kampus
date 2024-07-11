<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    
    protected $table = 'mahasiswas';

    protected $fillable = [
        'nim',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'ipk',
        'prodi_id',
        'rombel_id',
    ];
    
    public $timestamps = false;
}
