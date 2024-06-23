<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Books;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('reservations')->insert([
            ['user_id' => 1, 'book_id' => 1, 'reserved_at' => '2024-06-24', 'returned_at' => '2024-06-25'],
            ['user_id' => 2, 'book_id' => 2, 'reserved_at' => '2024-06-24', 'returned_at' => '2024-06-25'],
            ['user_id' => 3, 'book_id' => 3, 'reserved_at' => '2024-06-24', 'returned_at' => '2024-06-25'],
            ['user_id' => 4, 'book_id' => 4, 'reserved_at' => '2024-06-24', 'returned_at' => '2024-06-25']
        ]);
    }
}