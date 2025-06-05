<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "detail" => "required"
        ]);

        Product::create([
            "name" => $request->name,
            "detail" => $request->detail
        ]);

        return redirect('product.index')
            ->with('success', 'Product created succcessfully');
    }
}
