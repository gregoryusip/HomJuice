@extends('dashboard.layouts.main')

@section('container')
<div class="container main-container py-5 mb-5">

    <div class="row justify-content-center mb-1 mb-lg-3">
        <div class="col-md-12 col-lg-8">
            <p class="breadcrumbs"><a href="/blogs">Blog</a> <span class="mx-1 mx-md-2">/</span> <a href="/blogs?blog_category={{ $post->blog_category->slug }}">{{ $post->blog_category->name }}</a> <span class="mx-1 mx-md-2">/</span> {{ $post->title }}</p>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col-md-12 col-lg-8 col-xl-8">
            <img
                src="{{ asset('product-images/' . $post->image) }}"
                class="img-fluid rounded-1"
                alt="asdsad"
                {{-- style="width:860px;" --}}
            />
        </div>
    </div>

    <div class="row justify-content-center text-center text-md-start mb-4">
        <div class="col-md-12 col-lg-8 col-xl-8">
            <h6 class="mb-3"><i class="uil uil-user me-1"></i> {{ $post->author->name }} <i class="uil uil-calendar-alt ms-2 me-1"></i> {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y')}}</h6>
            <h1>{{ $post->title }}</h1>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-12 col-lg-8 col-xl-8">
            <p>{!! $post->body !!}</p>
        </div>
    </div>

    <div class="row justify-content-center mb-2 text-center">
        <div class="col-md-12 col-lg-8 col-xl-8">
            <h3 style="font-weight: 900">Share this article</h3>
        </div>
    </div>
    <div class="row justify-content-center mb-5 text-center">
        <div class="col-12 fs-4 share-icon">
            <button>
                <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=https://homjuice.com/blogs/' . $post->slug }}" target="_blank" rel="noopener" aria-label="Share on Facebook">
                    <i class="uil uil-facebook-f mx-2"></i>
                </a>
            </button>
            <button>
                <a href="{{ 'http://twitter.com/share?text=' . $post->title . '&url=https://homjuice.com/blogs/' . $post->slug }}" target="_blank" rel="noopener" aria-label="Share on Twitter">
                    <i class="uil uil-twitter mx-2"></i>
                </a>
            </button>
            <button>
                <a href="{{ 'https://api.whatsapp.com/send?text=' . $post->title . ' https://homjuice.com/blogs/'. $post->slug }}" target="_blank" rel="noopener" aria-label="Share on Linkedin">
                    <i class="uil uil-whatsapp mx-2"></i>
                </a>
            </button>
            <button onclick="copyShareLink()">
                <a href="">
                    <i class="uil uil-link mx-2"></i>
                </a>
            </button>
        </div>
    </div>
</div>
@endsection
