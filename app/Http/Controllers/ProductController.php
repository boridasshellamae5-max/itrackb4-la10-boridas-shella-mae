<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category_id', '');
        $price = $request->query('price', '');

        // SS6: Enable query logging
        DB::flushQueryLog();
        DB::enableQueryLog();

        // BEFORE eager loading: no with()
        $query = Product::with('category');

        if ($category !== '') {
            $query->where('category_id', $category);
        }

        if ($price !== '') {
            $query->where('price', '<=', $price);
        }

        $products = $query->get();

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

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'available' => 'required|boolean',
            'description' => 'nullable|string',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product added successfully!');
    }
}
