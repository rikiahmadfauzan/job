<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $primaryKey = 'id';
    protected $fillable = ([
        'nama_perusahaan',
        'nik',
        'name',
        'email',
        'document',
    ]);
}
