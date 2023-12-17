<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik',
        'name',
        'owner',
        'nama_perusahaan',
        'alamat',
        'email',
        'no_telpon',
        'gaji_min',
        'gaji_max',
        'posisi',
        'foto_perusahaan',
        'status',
        'deskripsi'
    ];

}
