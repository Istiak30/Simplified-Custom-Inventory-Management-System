<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Cola', 'quantity' => 10, 'price' => 20],
            ['name' => 'Pizza', 'quantity' => 15, 'price' => 25.50],
        ]);
    }
}
