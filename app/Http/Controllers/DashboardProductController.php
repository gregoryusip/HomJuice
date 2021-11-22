<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filter_title = '';
        if(request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $filter_title = "Category: " . $category->name;
        }

        return view('dashboard.products.index', [
            "title" => "Products Dashboard",
            "filter_title" => $filter_title,
            "products" => Product::filter(request(['search','category']))->get(),
            "categories" => Category::all(),
        ]);
        // return view('dashboard.products.index', [
        //     "title" => "Products Dashboard",
        //     "products" => Product::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.products.create', [
            'title' => "Create Product",
            "categories" => Category::all(),
            "ingredients" => Ingredient::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'size' => 'required|numeric',
            'category_id' => 'required',
            'ingredient' => 'required',
            'benefit' => 'required',
            'body' => 'required',
            'price' => 'required|numeric',
            'tokopedia_link' => 'required',
            'shopee_link' => 'required',
            'image' => 'required|image|max:5120',
        ]);

        if($request->file('image'))
        {
            // $validatedData['image'] = $request->file('image')->store('product-images');
            $validatedData['image'] = $request->file('image')->store(null);
        }

        $ingredient_product = $request->input('ingredient_product');

        $product = Product::create($validatedData);
        $product->ingredients()->sync($ingredient_product);

        return redirect('/dashboard/products')->with('success', 'New Product has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('dashboard.products.show', [
            'title' => "Product Detail",
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('dashboard.products.edit', [
            'title' => "Edit Product",
            "categories" => Category::all(),
            "ingredients" => Ingredient::all(),
            "product" => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $rules = [
            'name' => 'required|max:255',
            'size' => 'required|numeric',
            'category_id' => 'required',
            'ingredient' => 'required',
            'benefit' => 'required',
            'body' => 'required',
            'price' => 'required|numeric',
            'tokopedia_link' => 'required',
            'shopee_link' => 'required'
        ];

        if($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image'))
        {
            // if($request->oldImage)
            // {
            //     Storage::delete($request->oldImage);
            // }
            // $validatedData['image'] = $request->file('image')->store('product-images');
            $image_path = "product-images" . "/" . $request->oldImage;
            if(File::exists($image_path))
            {
                File::delete($image_path);
            }
            $validatedData['image'] = $request->file('image')->store(null);
        }

        $ingredient_product = $request->input('ingredient_product');

        Product::where('id', $product->id)->update($validatedData);

        $product->ingredients()->sync($ingredient_product);

        return redirect('/dashboard/products')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        // if($product->image)
        // {
        //     Storage::delete($product->image);
        // }
        $image_path = "product-images" . "/" . $product->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        Product::destroy($product->id);

        return redirect('/dashboard/products')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
