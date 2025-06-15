<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        // Llamar al seeder de mascotas
        $this->call([
            MascotaSeeder::class,
        ]);
    }
}
