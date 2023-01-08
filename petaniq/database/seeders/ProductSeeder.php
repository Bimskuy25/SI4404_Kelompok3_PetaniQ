<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Product::create([
            'id' => '101',
            'user_id' => '111',
            'nama_product' => 'Beras Enak',
            'harga' => 15.600,
            'deskripsi' => 'Beras unggul kami juga memiliki nilai gizi yang tinggi,
            sehingga cocok untuk anda yang ingin menjaga kesehatan keluarga anda.
            Jangan ragu untuk membeli beras unggul kami sekarang juga!',
            'foto_product' => 'berasEnak.png',
            'kategori' => 'Beras',
        ]);
        Product::create([
            'id' => '102',
            'user_id' => '111',
            'nama_product' => 'Tomat Segar',
            'harga' => 12.300,
            'deskripsi' => 'Tomat segar kami juga memiliki nilai gizi yang tinggi,
            kaya akan vitamin C dan potassium. Jangan ragu untuk membeli tomat segar
            kami sekarang juga untuk menjaga kesehatan anda dan keluarga anda!',
            'foto_product' => 'TomatSegar.png',
            'kategori' => 'Sayur',
        ]);
        Product::create([
            'id' => '103',
            'user_id' => '111',
            'nama_product' => 'Semangka Klaten',
            'harga' => 13.400,
            'deskripsi' => 'Tomat segar kami juga memiliki nilai gizi yang tinggi,
            kaya akan vitamin C dan potassium. Jangan ragu untuk membeli tomat segar
            kami sekarang juga untuk menjaga kesehatan anda dan keluarga anda!',
            'foto_product' => 'SemangkaKlaten.png',
            'kategori' => 'Buah',
        ]);
    }
}
