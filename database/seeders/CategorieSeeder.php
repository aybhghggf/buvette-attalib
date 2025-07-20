<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::insert([
            ['id' => 1, 'nom' => 'Café-Boissons', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nom' => 'Snaks-Marocains' , 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nom' => 'Jus-Naturels' , 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
