<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'price' => 45000,
            'quantity' => 5,
            'category' => 'Electronics',
            'available' => true,
            'description' => 'High-performance laptop',
        ]);

        Product::create([
            'name' => 'Smartphone',
            'price' => 15000,
            'quantity' => 10,
            'category' => 'Electronics',
            'available' => true,
            'description' => 'Android smartphone',
        ]);

        Product::create([
            'name' => 'Keyboard',
            'price' => 1200,
            'quantity' => 15,
            'category' => 'Accessories',
            'available' => true,
            'description' => 'Mechanical keyboard',
        ]);

        Product::create([
            'name' => 'Mouse',
            'price' => 800,
            'quantity' => 20,
            'category' => 'Accessories',
            'available' => true,
            'description' => 'Wireless mouse',
        ]);

        Product::create([
            'name' => 'Headset',
            'price' => 2500,
            'quantity' => 8,
            'category' => 'Accessories',
            'available' => true,
            'description' => 'Stereo headset',
        ]);

        Product::create([
            'name' => 'Printer',
            'price' => 8500,
            'quantity' => 4,
            'category' => 'Electronics',
            'available' => false,
            'description' => 'Office printer',
        ]);
    }
}
