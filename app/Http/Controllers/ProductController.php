<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        $category = $request->query('category', '');
        $price = $request->query('price', '');

        return view('products.index', compact(
            'products',
            'category',
            'price'
        ));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }
}
