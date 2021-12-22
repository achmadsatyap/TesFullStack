<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Mie Ayam',
                'description' => 'Mie',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMie_ayam&psig=AOvVaw3Q7UUK7Ip9IdYzPVmOZZ82&ust=1640278121704000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKDtkKnu9_QCFQAAAAAdAAAAABAD',
                'price' => 15000
            ],
            [
                'name' => 'Ayam Geprek',
                'description' => 'Ayam',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FAyam_geprek&psig=AOvVaw1C9uZ_mjJzKMXACgANGazO&ust=1640278147713000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPid7LXu9_QCFQAAAAAdAAAAABAD',
                'price' => 17000
            ],
            [
                'name' => 'Es Teh',
                'description' => 'Teh',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.idntimes.com%2Ffood%2Fdining-guide%2Fprila-arofani%2Fkumpulan-foto-berbagai-kreasi-es-teh&psig=AOvVaw27lW1sW-_M7eJnFUlan9lU&ust=1640278169125000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMCuhcXu9_QCFQAAAAAdAAAAABAD',
                'price' => 4000
            ],
            [
                'name' => 'Es Jeruk',
                'description' => 'Jeruk',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FEs-Jeruk-Peras-i.313542002.6154241933&psig=AOvVaw3sA5dD9g3Urbu58iPlf9Ay&ust=1640278212257000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMDEht7u9_QCFQAAAAAdAAAAABAD',
                'price' => 5000
            ]
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
