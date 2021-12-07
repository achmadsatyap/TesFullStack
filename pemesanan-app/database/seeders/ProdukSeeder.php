<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Produk::create([
                'nama' => 'Mie Ayam',
                'harga' => 15000,
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMie_ayam&psig=AOvVaw11OADyna-yu_RJky5UhyHz&ust=1638921340314000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiK7PSv0PQCFQAAAAAdAAAAABAD'
            ]);
            Produk::create([
                'nama' => 'Ayam Geprek',
                'harga' => 17000,
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fresepkoki.id%2Fresep%2Fresep-ayam-geprek-jogja%2F&psig=AOvVaw3mHHmWmqakGMv03YLVtBaP&ust=1638921393445000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKCbm46w0PQCFQAAAAAdAAAAABAD'
            ]);
            Produk::create([
                'nama' => 'Es Teh',
                'harga' => 4000,
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FEs-teh-i.87878399.4407154170&psig=AOvVaw2jKtunzh6wfb6UlzGmF_Rj&ust=1638921421189000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCODjxJuw0PQCFQAAAAAdAAAAABAD'
            ]);
            Produk::create([
                'nama' => 'Es Jeruk',
                'harga' => 5000,
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bukalapak.com%2Fp%2Ffood%2Fminuman%2F275ofzw-jual-es-jeruk-bu-kaji-bukakuliner&psig=AOvVaw2M3E6iuadRShhAnVjyzX5d&ust=1638921462599000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPj__K6w0PQCFQAAAAAdAAAAABAK'
            ]);
        }
    }
}
