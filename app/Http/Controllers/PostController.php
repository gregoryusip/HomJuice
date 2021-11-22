<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('blog.blog', [
            "title" => "Blog",
            // "posts" => Post::latest()->get(),
            "posts" => Post::latest()->filter(request(['search','blog_category']))->paginate(10)->withQueryString(),
        ]);
    }

    public function blogDetail(Post $post)
    {
        return view('blog.blog_detail', [
            "title" => $post->title,
            "post" => $post,
        ]);
    }
}
