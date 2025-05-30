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
}
