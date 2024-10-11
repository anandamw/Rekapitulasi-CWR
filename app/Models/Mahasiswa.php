<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    // The table associated with the model
    protected $table = 'mahasiswas';

    // The attributes that are mass assignable
    protected $fillable = [
        'npm',
        'nama',
        'prodi',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'alamat',
        'tlpn',
        'email',
        'judul_ta',
        'kesan',
        'pesan',
        'ipk',
        'predikat',
        'foto_mhs'
    ];
}
