<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $filter_title = '';
        if(request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $filter_title = $category->name;
        }

        return view('product.product', [
            "title" => "Product",
            "filter_title" => $filter_title,
            "products" => Product::latest()->filter(request(['search','category']))->get(),
            "categories" => Category::all(),
        ]);
    }

    public function productDetail(Product $product)
    {
        return view('product.product_detail', [
            "title" => $product->name,
            "product" => $product,
        ]);
    }
}
