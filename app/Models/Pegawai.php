<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';

    protected $fillable = [
        'nama',
        'NIK',
        'tgl_lahir',
        'nomor_induk',
        'status',
        'telepon',
        'alamat',
        'email',
        'unit_id',
        'KK',
        'NPWP',
        'jenis',
        'user_id',
    ];

    public static function getStatusOptions()
    {
        return [
            'Aktif' => 'Aktif',
            'Tidak Aktif' => 'Tidak Aktif',
        ];
    }

    public static function getjenisOptions()
    {
        return [
            'Jenis 1' => 'Jenis 1',
            'Jenis 2' => 'Jenis 2',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function sub_perencanaan()
    {
        return $this->hasMany(SubPerencanaan::class);
    }
}
