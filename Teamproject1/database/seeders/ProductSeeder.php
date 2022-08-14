<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 6; $i++) {
            $category = Category::find(2);

            Product::create([
                'name' => 'Mens '. $i,
                'slug' => 'mens-'. $i,
                'details' => 'Mens Shoes',
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Sit amet nisl suscipit adipiscing bibendum est ultricies integer quis. Sollicitudin aliquam ultrices sagittis orci a.',
                'product_code' => $category->category_code.$i,
                'price' => rand(999,9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        };

        for ($i=1; $i <= 6; $i++) {
            $category = Category::find(1);

            Product::create([
                'name' => 'Womens '. $i,
                'slug' => 'womens-'. $i,
                'details' => 'womens Shoes',
                'description' => 'Pulvinar '. $i. ' mattis nunc sed blandit libero volutpat sed cras ornare. Facilisi nullam vehicula ipsum a arcu cursus vitae. Ornare massa eget egestas purus.',
                'product_code' => $category->category_code.$i,
                'price' => rand(999,9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        };
    }
}
