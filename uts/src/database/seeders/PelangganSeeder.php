<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::create([
            'nama' => 'jono', 
            'email' => 'jono@example.com',
            'telepon' => '011111',
            'alamat' => 'jln. wikwok no. 03',
        ]);
        
    }
}
