<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Admin'
        ]);

        $user->assignRole('super_admin');

        $this->call([
            PelangganSeeder::class,
        ]);
    }
}
