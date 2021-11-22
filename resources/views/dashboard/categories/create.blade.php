@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
</div>

<div class="row mb-3">
    <div class="col-md d-flex">
        <a href="/dashboard/categories" class="back-button d-flex">
            <i class="uil uil-corner-up-left-alt fs-4 arrow-icon"></i>
            <p class="m-2 back-tag">Back</p>
        </a>
    </div>
</div>

<div class="col-lg-8">
    <form action="/dashboard/categories" method="POST" class="mb-5" enctype="multipart/form-data">
        @csrf

        <div class="col-md mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Category Name" required autofocus value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-5">
            <label for="slug" class="form-label">Category Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Slug" required readonly value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="button">Create Category</button>

    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection
