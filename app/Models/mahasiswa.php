<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {
    protected $fillable = [
        'nama_lengkap', 'nomor_induk_mahasiswa', 'email', 'nomor_telepon',
        'tanggal_lahir', 'jenis_kelamin', 'angkatan_mahasiswa', 'hobby', 'foto'
    ];
}
