<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    public function run()
    {
        $units = [
            [
                'nama' => 'Keuangan',
                'singkatan' => 'BAK',
            ],
            [
                'nama' => 'Direktur',
                'singkatan' => 'Dir',
            ],
            [
                'nama' => 'Wakil Direktur',
                'singkatan' => 'Wadir',
            ],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}
