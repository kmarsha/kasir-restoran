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
                'foto' => 'storage/menu/strawberry milkshake.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Latte',
                'harga' => '20000',
                'deskripsi' => 'Coffee Latte',
                'foto' => 'storage/menu/coffee latte.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Taro Bubble Milk Tea',
                'harga' => '12000',
                'deskripsi' => 'Milk Tea with taste of Taro',
                'foto' => 'storage/menu/taro bubble milk tea.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Chocolatte Milkshake',
                'harga' => '12000',
                'deskripsi' => 'Milkshake cokelat',
                'foto'  => 'storage/menu/choco milkshake.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '286',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Potato Wedges',
                'harga' => '20000',
                'deskripsi' => 'Wedges Potato with chili sauce',
                'foto' => 'storage/menu/potato wedges.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Matcha',
                'harga' => '7000',
                'deskripsi' => 'Matchaaaa',
                'foto' => 'storage/menu/matcha.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Kentang Goreng Saus Keju',
                'harga' => '15000',
                'deskripsi' => 'french fries',
                'foto' => 'storage/menu/kentang goreng saus keju.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Americano',
                'harga' => '8000',
                'deskripsi' => 'Kopi Americano',
                'foto' => 'storage/menu/coffee americano.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '32',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Espreso',
                'harga' => '9000',
                'deskripsi' => 'Kopi Espreso',
                'foto' => 'storage/menu/coffee espresso.png',
                'kategori' => 'minuman',
                'ketersediaan' => '24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Cappucino',
                'harga' => '12000',
                'deskripsi' => 'Kopi Cappucino',
                'foto' => 'storage/menu/Cappuccino1.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Sandwich',
                'harga' => '10000',
                'deskripsi' => 'Double Sauce Sandwich',
                'foto' => 'storage/menu/sandwich.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Chocolatte Boba',
                'harga' => '10000',
                'deskripsi' => 'Boba coklat',
                'foto' => 'storage/menu/choco boba.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Manggo Jelly Ice Cream',
                'harga' => '15000',
                'deskripsi' => 'Milk Ice fresh Manggo',
                'foto' => 'storage/menu/mango jelly ice.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Spagetti',
                'harga' => '20000',
                'deskripsi' => 'Spagetti Bologness',
                'foto' => 'storage/menu/spagetti bologness.png',
                'kategori' => 'makanan',
                'ketersediaan' => '40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Coffee Cake',
                'harga' => '30000',
                'deskripsi' => 'Kue Kopi dengan ekstra krim cokelat',
                'foto' => 'storage/menu/chocolate cake.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Cotton Candy Freakshake',
                'harga' => '45000',
                'deskripsi' => 'Cotton Candy Freakshake',
                'foto' => 'storage/menu/cotton candy freakshake.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Strawberry Freakshake',
                'harga' => '45000',
                'deskripsi' => 'Strawberry Freakshake',
                'foto' => 'storage/menu/strawberry freakshake.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Doughnut',
                'harga' => '48000',
                'deskripsi' => 'Dengan 12 Varian Rasa',
                'foto' => 'storage/menu/donat varian.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Menu::insert($menus);
    }
}
