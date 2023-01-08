<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '111',
            'name' => 'petani',
            'email' => 'petani@gmail.com',
            'kategori' => 'petani',
            'password' => bcrypt('12345678'),
            'phone' => '08101010101'
        ]);
        User::create([
            'id' => '112',
            'name' => 'pembeli',
            'email' => 'pembeli@gmail.com',
            'kategori' => 'pembeli',
            'password' => bcrypt('12345678'),
            'phone' => '08202020202'
        ]);
        User::create([
            'id' => '113',
            'name' => 'admin ganteng',
            'email' => 'admin@gmail.com',
            'kategori' => 'admin',
            'password' => bcrypt('12345678'),
            'phone' => '083383838443'
        ]);
    }
}
