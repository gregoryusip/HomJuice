<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.ingredients.index', [
            'title' => "Ingredients Dashboard",
            'ingredients' => Ingredient::filter(request(['search']))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.ingredients.create', [
            'title' => "Create Ingredient",
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
            'slug' => 'required|unique:categories',
            'description' => 'required',
            'image' => 'required|image|max:5120',
        ]);

        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store(null);
        }

        Ingredient::create($validatedData);

        return redirect('/dashboard/ingredients')->with('success', 'New Ingredient has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        //
        return view('dashboard.ingredients.edit', [
            'title' => "Edit Ingredient",
            "ingredient" => $ingredient,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        //
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required',
        ];

        if($request->slug != $ingredient->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image'))
        {
            $image_path = "product-images" . "/" . $request->oldImage;
            if(File::exists($image_path))
            {
                File::delete($image_path);
            }
            $validatedData['image'] = $request->file('image')->store(null);
        }

        Ingredient::where('id', $ingredient->id)
                ->update($validatedData);

        return redirect('/dashboard/ingredients')->with('success', 'Ingredient has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
        $image_path = "product-images" . "/" . $ingredient->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        Ingredient::destroy($ingredient->id);

        return redirect('/dashboard/ingredients')->with('success', 'Ingredient has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Ingredient::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
