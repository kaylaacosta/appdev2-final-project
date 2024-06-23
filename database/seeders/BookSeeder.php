<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Harry Potter', 'author' => 'J.K. Rowling', 'isbn' => '12345', 'genre' => 'Adventure'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'isbn' => '6789', 'genre' => 'Literary Fiction'],
            ['title' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'isbn' => '23456', 'genre' => 'Fantasy'],
            ['title' => 'Gone Girl', 'author' => 'Gillian Flynn', 'isbn' => '7891', 'genre' => 'Mystery, Thriller'],
            ['title' => 'The Hunger Games', 'author' => 'Suzanne Collins', 'isbn' => '3456', 'genre' => 'Dystopian Fiction'],
        ]);
    }
}
