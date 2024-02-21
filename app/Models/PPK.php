<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPK extends Model
{
    use HasFactory;

    protected $table = 'tb_ppk';

    protected $fillable = [
        'tahun_anggaran',
        'pegawai_id',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function subPerencanaan()
    {
        return $this->hasMany(SubPerencanaan::class);
    }
}
