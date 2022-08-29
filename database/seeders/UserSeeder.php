<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Macca',
                'username' => 'maccaa1',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Macca',
                'username' => 'maccaa2',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Macca',
                'username' => 'maccaa3',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'role' => 'manajer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rara',
                'username' => 'raraa1',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sasha',
                'username' => 'sashaa1',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Macca',
                'username' => 'maccaa',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'role' => 'pelanggan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);
    }
}
