<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create categories FIRST
        $a = Category::create([
            'name' => 'Electronics'
        ]);

        $b = Category::create([
            'name' => 'Accessories'
        ]);

        $c = Category::create([
            'name' => 'Office Equipment'
        ]);

        // 2. Create products using category IDs

        Product::create([
            'name' => 'Laptop',
            'price' => 45000,
            'quantity' => 5,
            'category_id' => $a->id,
            'available' => true,
            'description' => 'High-performance laptop',
        ]);

        Product::create([
            'name' => 'Smartphone',
            'price' => 15000,
            'quantity' => 10,
            'category_id' => $a->id,
            'available' => true,
            'description' => 'Android smartphone',
        ]);

        Product::create([
            'name' => 'Keyboard',
            'price' => 1200,
            'quantity' => 15,
            'category_id' => $b->id,
            'available' => true,
            'description' => 'Mechanical keyboard',
        ]);

        Product::create([
            'name' => 'Mouse',
            'price' => 800,
            'quantity' => 20,
            'category_id' => $b->id,
            'available' => true,
            'description' => 'Wireless mouse',
        ]);

        Product::create([
            'name' => 'Headset',
            'price' => 2500,
            'quantity' => 8,
            'category_id' => $b->id,
            'available' => true,
            'description' => 'Stereo headset',
        ]);

        Product::create([
            'name' => 'Printer',
            'price' => 8500,
            'quantity' => 4,
            'category_id' => $c->id,
            'available' => false,
            'description' => 'Office printer',
        ]);
    }
}
