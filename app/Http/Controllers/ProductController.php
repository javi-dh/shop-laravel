<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);

        return view('product.list', compact('products'));
    }

    public function byCategory($slug)
    {
        $products = Category::where('slug', $slug)->first()
        ->products()
        ->paginate(10);

        return view('product.list', compact('products'));
    }
}
