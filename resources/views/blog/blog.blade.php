@extends('layouts.main')

@section('container')
    <div class="container main-container py-5 mb-5">
        <div class="row mb-5 text-center">
            <h1 class="main-title">Homjuice Blog</h1>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="card rounded-0 border-0 bg-transparent mb-3">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="/blogs/{{ $posts[0]->slug }}">
                            <img
                            src="{{ asset('product-images/' . $posts[0]->image) }}"
                            class="img-fluid rounded-0"
                            alt="asdsad"
                            style="width: 680px; max-height: 400px;"
                            />
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-0">
                            <p class="mb-1">
                                <a href="/blogs?blog_category={{ $posts[0]->blog_category->slug }}" class="text-decoration-none category-name">
                                    {{ $posts[0]->blog_category->name }}
                                </a>
                            </p>
                            <h1 class="mb-3">
                                <a href="/blogs/{{ $posts[0]->slug }}" class="text-decoration-none product-name">
                                    {{ $posts[0]->title }}
                                </a>
                            </h1>
                            <p class="mb-4">{!! Str::words($posts[0]->body, 25, '...') !!}</p>
                        </div>
                        <a href="/blogs/{{ $posts[0]->slug }}">
                            <div class="row">
                                <div class="col">
                                    <p>Read article</p>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <i class="uil uil-arrow-up-right arrow-icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($posts->skip(1) as $post)

            <div class="col-md-4 mb-3">
                <div class="card rounded-0 border-0 bg-transparent mb-3">
                    <a href="/blogs/{{ $post->slug }}" class="blog-image">
                        <img
                        src="{{ asset('product-images/' . $post->image) }}"
                        class="img-fluid rounded-0"
                        alt="asdsad"
                        />
                    </a>
                    <div class="card-body p-0">
                        <p class="mt-3 mb-2">
                            <a href="/blogs?blog_category={{ $post->blog_category->slug }}" class="text-decoration-none category-name">
                                {{ $post->blog_category->name }}
                            </a>
                        </p>
                        <h5 class="mb-4" style="">
                            <a href="/blogs/{{ $post->slug }}" class="text-decoration-none product-name">
                                {{ $post->title }}
                            </a>
                        </h5>
                    </div>
                    <a href="/blogs/{{ $post->slug }}">
                        <div class="row">
                            <div class="col">
                                <p>Read article</p>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <i class="uil uil-arrow-up-right arrow-icon"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
