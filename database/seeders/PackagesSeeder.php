<?php

namespace Database\Seeders;

use App\Models\Packages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Packages::insert([
            // 🟫 Snacks Marocains (ID = 2)
            [
                'id' => 1,
                'gategorie_id' => 2,
                'nom' => 'Msemen + Thé + Fromages',
                'description' => 'Pack traditionnel marocain avec msemen croustillant, thé à la menthe fraîche et fromage local savoureux.',
                'descriptionSecondaire' => 'Savourez la combinaison parfaite du msemen doré, d’un thé à la menthe rafraîchissant et d’un fromage fondant — un vrai voyage gustatif au cœur du Maroc.',
                'prix' => 10.00,
                'image' => 'pack1.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'gategorie_id' => 2,
                'nom' => 'Msemen + Lait au Chocolat + Fromages',
                'description' => 'Un pack gourmand avec msemen croustillant accompagné d’un lait chaud au chocolat et fromage fondant.',
                'descriptionSecondaire' => 'Dégustez un msemen croustillant accompagné d’un délicieux lait chaud au chocolat et d’un fromage savoureux — douceur et énergie garanties.',
                'prix' => 11.00,
                'image' => 'pack1_choco.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'gategorie_id' => 2,
                'nom' => 'Harcha + Atay + Fromage',
                'description' => 'Un délicieux pack avec harcha traditionnelle, atay chaud et fromage fondant.',
                'descriptionSecondaire' => 'Un savoureux mélange d’harcha moelleuse, de thé à la menthe parfumé et d’un fromage fondant, pour un moment de plaisir authentique.',
                'prix' => 12.00,
                'image' => 'pack2.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'gategorie_id' => 2,
                'nom' => 'Harcha + Lait au Chocolat + Fromage',
                'description' => 'Un savoureux pack avec harcha traditionnelle, lait chaud au chocolat et fromage fondant.',
                'descriptionSecondaire' => 'Goûtez à la douceur de la harcha accompagnée d’un lait chaud au chocolat riche et d’un fromage onctueux — parfait pour se réchauffer.',
                'prix' => 13.00,
                'image' => 'pack2_choco.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 🟫 Café et Boissons (ID = 1)
            [
                'id' => 5,
                'gategorie_id' => 1,
                'nom' => 'Café Simple',
                'description' => 'Un café chaud et parfumé, parfait pour bien commencer votre journée.',
                'descriptionSecondaire' => 'Un café authentique aux arômes riches, torréfié avec soin pour réveiller vos sens à chaque gorgée.',
                'prix' => 8.00,
                'image' => 'café1.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'gategorie_id' => 1,
                'nom' => 'Café + Fruits Secs',
                'description' => 'Un délicieux café accompagné d’un assortiment de fruits secs.',
                'descriptionSecondaire' => 'Une pause énergisante qui marie la force du café à la douceur naturelle d’amandes, noix et dattes sélectionnées.',
                'prix' => 15.00,
                'image' => 'café2.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'gategorie_id' => 1,
                'nom' => 'Lait + Sirop ou Chocolat',
                'description' => 'Un verre de lait au choix (chaud ou froid), accompagné d’un sirop ou de chocolat.',
                'descriptionSecondaire' => 'Une boisson réconfortante, à personnaliser avec votre sirop préféré ou du chocolat fondant, chaude ou froide selon vos envies.',
                'prix' => 10.00,
                'image' => 'lait.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 🟫 Jus Naturel (ID = 3)
            [
                'id' => 8,
                'gategorie_id' => 3,
                'nom' => 'Panaché',
                'description' => 'Un mélange de fruits frais mixés avec du lait, crémeux et rafraîchissant.',
                'descriptionSecondaire' => 'Un cocktail fruité et lacté où banane, pomme, poire et fraise se mêlent pour une boisson douce et vitaminée.',
                'prix' => 14.00,
                'image' => 'panaché.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'gategorie_id' => 3,
                'nom' => 'Ze3ze3',
                'description' => 'Un mélange épais de fruits secs, avocat, lait et chocolat.',
                'descriptionSecondaire' => 'Un concentré d’énergie marocaine avec avocat, dattes, amandes, lait et une touche gourmande de chocolat.',
                'prix' => 18.00,
                'image' => 'ze3ze3.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'gategorie_id' => 3,
                'nom' => 'Orange Pressée',
                'description' => 'Un jus d’orange 100% naturel pressé sur place.',
                'descriptionSecondaire' => 'Un jus frais, riche en vitamine C, idéal pour se désaltérer et faire le plein de vitalité au naturel.',
                'prix' => 10.00,
                'image' => 'jusdorange.png',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
