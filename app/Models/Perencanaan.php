<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model
{
    use HasFactory;

    protected $table = 'tb_perencanaan';

    protected $fillable = [
        'nama',
        'kd_perencanaan',
        'sumber',
        'revisi',
        'unit_id',
    ];

    // Definisikan relasi ke model Unit
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
