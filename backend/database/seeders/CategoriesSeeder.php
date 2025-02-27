<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder {
    public function run() {
        DB::table('categories')->insert([
            ['name' => 'Shirts'],
            ['name' => 'Trousers'],
            ['name' => 'Jackets'],
            ['name' => 'Shoes'],
            ['name' => 'Accessories'],
        ]);
    }
}