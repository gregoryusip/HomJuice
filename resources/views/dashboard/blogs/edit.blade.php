@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Product</h1>
</div>

<div class="row mb-3">
    <div class="col-md d-flex">
        <a href="/dashboard/posts" class="back-button d-flex">
            <i class="uil uil-corner-up-left-alt fs-4 arrow-icon"></i>
            <p class="m-2 back-tag">Back</p>
        </a>
    </div>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-md mb-3">
            <label for="title" class="form-label">Blog Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="title" placeholder="Blog Title" required autofocus value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-5">
            <label for="slug" class="form-label">Blog Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Slug" required readonly value="{{ old('slug', $post->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="blog_category" class="form-label">Category</label>
            <select class="form-select" name="blog_category_id">
                @foreach ($blog_categories as $blog_category)
                    @if (old('blog_category_id', $post->blog_category_id) == $blog_category->id)
                        <option value="{{ $blog_category->id }}" selected>{{ $blog_category->name }}</option>
                    @else
                        <option value="{{ $blog_category->id }}" >{{ $blog_category->name }}</option>
                    @endif
                 @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Blog Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if ($post->image)
                <img src="{{ asset('product-images/' . $post->image) }}" class="img-preview img-fluid mb-3 d-block">
            @else
                <img class="img-preview img-fluid mb-5">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Blog Body</label>

            @error('body')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror

            <input id="body" type="hidden" name="body" required value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="button">Update Blog</button>

    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    });

    function previewImage()
    {
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');

        imagePreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent)
        {
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
