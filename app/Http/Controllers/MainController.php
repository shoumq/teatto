<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $productSale = Product::where('sale', 1)->get();
        return view('index', compact('productSale'));
    }

    public function category($category)
    {
        $categoryObject = Category::where('code', $category)->first();
        $products = Product::where('category_id', $categoryObject->id)->get();
        return view('market', compact('categoryObject', 'products'));
    }

    public function categories()
    {
        $categoryAll = Category::all();
        return view('categories', compact('categoryAll'));
    }

    public function product($product)
    {
        $productObject = Product::where('code', $product)->first();
        return view('product', compact('productObject'));
    }
}
