<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name' => 'Womens', 'slug' => 'womens', 'category_code' => 'W', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mens', 'slug' => 'mens', 'category_code' => 'M', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
