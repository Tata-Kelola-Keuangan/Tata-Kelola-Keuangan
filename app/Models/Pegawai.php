<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nik',
        'tanggal_lahir',
        'nomor_induk',
        'status',
        'telepon',
        'alamat',
        'KK',
        'npwp',
        'jenis',
    ];
}