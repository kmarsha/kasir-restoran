<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->subDays('6')->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now()->subDays('6'),
                'updated_at' => now()->subDays('6'),
            ]);
        };
        for($i = 1; $i <= 6; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->subDays('5')->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now()->subDays('5'),
                'updated_at' => now()->subDays('5'),
            ]);
        };
        for($i = 1; $i <= 8; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->subDays('4')->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now()->subDays('4'),
                'updated_at' => now()->subDays('4'),
            ]);
        };
        for($i = 1; $i <= 4; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->subDays('3')->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now()->subDays('3'),
                'updated_at' => now()->subDays('3'),
            ]);
        };
        for($i = 1; $i <= 9; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->subDays('2')->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now()->subDays('2'),
                'updated_at' => now()->subDays('2'),
            ]);
        };
        for($i = 1; $i <= 12; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->subDays('1')->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now()->subDays('1'),
                'updated_at' => now()->subDays('1'),
            ]);
        };
        for($i = 1; $i <= 25; $i++) {
            Transaksi::insert([
                'transaksi_id' => now()->format("YmdH_" . rand(9999999, 1000000)),
                'nama_pelanggan' => $faker->firstName(),
                'menu_id' => $faker->numberBetween(1, 11),
                'jumlah' => $faker->numberBetween(1, 8),
                'total_harga' => $faker->numberBetween(7, 180) * 1000,
                'pegawai_id' => $faker->randomElement([2, 4, 5]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        };

        // $trans = [
        //     [
        //         'nama_pelanggan' => 'Macca',
        //         'menu_id' => '1',
        //         'jumlah' => '2',
        //         'total_harga' => * 10000',
        //         'pegawai_id' => $faker->randomElement([2, 4, 5]),
        //         'created_at' => '2022-02-12 12:58:12',
        //         'updated_at' => '2022-02-13 12:58:12',
        //     ],
        //     [
        //         'nama_pelanggan' => 'Macca',
        //         'menu_id' => '2',
        //         'jumlah' => '4',
        //         'total_harga' =>  * 1000',
        //         'pegawai_id' => $faker->randomElement([2, 4, 5]),
        //         'created_at' => '2022-02-14 12:58:12',
        //         'updated_at' => '2022-02-16 12:58:12',
        //     ],
        // ];

        // Transaksi::insert($trans);
    }
}
