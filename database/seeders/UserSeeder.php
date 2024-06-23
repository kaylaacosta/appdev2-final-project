<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Kayla Acosta', 'email' => 'kaylaacosta@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Bruce Acosta', 'email' => 'bruceacosta@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Alona Pegarit', 'email' => 'alona@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Azhelle Casimiro', 'email' => 'azhelle@gmail.com', 'password' => Hash::make('password')]

        ]);
    }
}
