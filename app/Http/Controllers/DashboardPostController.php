<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.blogs.index', [
            "title" => "Blogs Dashboard",
            "posts" => Post::all(),
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
        return view('dashboard.blogs.create', [
            'title' => "Create Blog",
            "blog_categories" => BlogCategory::all(),
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:products',
            'blog_category_id' => 'required',
            'image' => 'required|image|max:5120',
            'body' => 'required',
        ]);

        if($request->file('image'))
        {
            // $validatedData['image'] = $request->file('image')->store('product-images');
            $validatedData['image'] = $request->file('image')->store(null);
        }

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Blog has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('dashboard.blogs.show', [
            "title" => "Blog Detail",
            "post" => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('dashboard.blogs.edit', [
            'title' => "Edit Blogs",
            "blog_categories" => BlogCategory::all(),
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'blog_category_id' => 'required',
            'body' => 'required',
        ];

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:products';
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

        $validatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)
                ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $image_path = "product-images" . "/" . $post->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Blog has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
