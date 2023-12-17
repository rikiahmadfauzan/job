<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;
    protected $table = 'posisi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_posisi',
        'deskripsi',
        'gaji',
        'lokasi'
    ];
}
