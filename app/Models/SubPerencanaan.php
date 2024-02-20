<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPerencanaan extends Model
{
    use HasFactory;

    protected $table = 'tb_sub_perencanaan';

    protected $fillable = [
        'kegiatan',
        'satuan',
        'volume',
        'harga_satuan',
        'output',
        'rencana_mulai',
        'rencana_bayar',
        'file_hps',
        'file_kak',
        'perencanaan_id',
        'pic_id',
        'ppk_id',
    ];

    public function perencanaan()
    {
        return $this->belongsTo(Perencanaan::class);
    }

    public function pic()
    {
        return $this->belongsTo(Pegawai::class, 'pic_id');
    }

    public function ppk()
    {
        return $this->belongsTo(PPK::class, 'ppk_id');
    }
}
