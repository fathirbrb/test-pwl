<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_kelas' => 'SI'],
            ['nama_kelas' => 'Ilkom A'],
            ['nama_kelas' => 'Ilkom B'],
        ];

        foreach ($data as $item) {
            Kelas::create($item);
        }
    }
}