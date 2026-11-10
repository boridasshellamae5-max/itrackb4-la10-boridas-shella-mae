<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'category',
        'available',
        'description'
    ];

    protected function casts(): array
    {
        return [
            'available' => 'boolean',
            'quantity' => 'integer',
        ];
    }
}
