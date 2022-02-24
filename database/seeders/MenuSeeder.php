<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $menus = [
            [
                'nama_menu' => 'Strawberry Milkshake',
                'harga' => '10000',
                'deskripsi' => 'Milkshake strawberry dengan krim vanila',
                'kategori' => 'minuman',
                'ketersediaan' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Latte',
                'harga' => '7000',
                'deskripsi' => 'Coffe Latte',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Taro Milk Tea',
                'harga' => '12000',
                'deskripsi' => 'Milk Tea with taste of Taro',
                'kategori' => 'minuman',
                'ketersediaan' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Potato Wedges',
                'harga' => '20000',
                'deskripsi' => 'Wedges Potato with chili sauce',
                'kategori' => 'makanan',
                'ketersediaan' => '28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Matcha',
                'harga' => '7000',
                'deskripsi' => 'Matchaaaa',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Kentang Goreng Saus Keju',
                'harga' => '15000',
                'deskripsi' => 'french fries',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Americano',
                'harga' => '8000',
                'deskripsi' => 'Kopi Americano',
                'kategori' => 'minuman',
                'ketersediaan' => '32',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Espreso',
                'harga' => '9000',
                'deskripsi' => 'Kopi Espreso',
                'kategori' => 'minuman',
                'ketersediaan' => '24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Cappucino',
                'harga' => '12000',
                'deskripsi' => 'Kopi Cappucino',
                'kategori' => 'minuman',
                'ketersediaan' => '21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Sandwich',
                'harga' => '10000',
                'deskripsi' => 'Double Sauce Sandwich',
                'kategori' => 'makanan',
                'ketersediaan' => '21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Chocolatte Boba',
                'harga' => '10000',
                'deskripsi' => 'Boba coklat',
                'kategori' => 'minuman',
                'ketersediaan' => '23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Manggo Jelly Milk Ice',
                'harga' => '15000',
                'deskripsi' => 'Milk Ice fresh Manggo',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Spagetti',
                'harga' => '20000',
                'deskripsi' => 'Spagetti Bologness',
                'kategori' => 'makanan',
                'ketersediaan' => '40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Coffee Cake',
                'harga' => '30000',
                'deskripsi' => 'Kue Kopi dengan ekstra krim cokelat',
                'kategori' => 'makanan',
                'ketersediaan' => '40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Menu::insert($menus);
    }
}
