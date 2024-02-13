<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'singkatan',
    ];

    // Definisikan relasi ke model Perencanaan
    public function perencanaan()
    {
        return $this->hasMany(Perencanaan::class);
    }
}
