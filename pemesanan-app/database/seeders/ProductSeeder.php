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
                'description' => 'Makanan',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMie_ayam&psig=AOvVaw2cwBs1Rhbc2fStAaJgkgEE&ust=1638930593951000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLCwh7LS0PQCFQAAAAAdAAAAABAD',
                'price' => 15000
            ],
            [
                'name' => 'Ayam Geprek',
                'description' => 'Makanan',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fresepkoki.id%2Fresep%2Fresep-ayam-geprek-jogja%2F&psig=AOvVaw2eOczS6UAKZDuVwG9NaROf&ust=1638930627255000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJCqpcHS0PQCFQAAAAAdAAAAABAD',
                'price' => 17000
            ],
            [
                'name' => 'Es Teh',
                'description' => 'Minuman',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FEs-teh-i.87878399.4407154170&psig=AOvVaw27Phi9RJJghVKD-vxCYUQ8&ust=1638930570676000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOj9mabS0PQCFQAAAAAdAAAAABAD',
                'price' => 4000
            ],
            [
                'name' => 'Es Jeruk',
                'description' => 'Minuman',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.yummy.co.id%2Fblog%2Fresep-komunitas%2Fes-jeruk-peras&psig=AOvVaw00o0Ze6ut-KIkGsBAbYpk_&ust=1638930977191000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJiYserT0PQCFQAAAAAdAAAAABAO',
                'price' => 5000
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
