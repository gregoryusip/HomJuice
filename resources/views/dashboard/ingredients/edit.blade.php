@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Ingredient</h1>
</div>

<div class="row mb-3">
    <div class="col-md d-flex">
        <a href="/dashboard/ingredients" class="back-button d-flex">
            <i class="uil uil-corner-up-left-alt fs-4 arrow-icon"></i>
            <p class="m-2 back-tag">Back</p>
        </a>
    </div>
</div>

<div class="col-lg-8">
    <form action="/dashboard/ingredients/{{ $ingredient->slug }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-md mb-3">
            <label for="name" class="form-label">Ingredient Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Ingredient Name" required autofocus value="{{ old('name', $ingredient->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="slug" class="form-label">Ingredient Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Slug" required readonly value="{{ old('slug', $ingredient->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="description" class="form-label">Ingredient Description</label>
            <textarea rows="2" class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description" required>{{ old('description', $ingredient->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="image" class="form-label">Ingredient Image</label>
            <input type="hidden" name="oldImage" value="{{ $ingredient->image }}">
            @if ($ingredient->image)
                @if (($ingredient->slug . '.jpg') == $ingredient->image  or ($ingredient->slug . '.png') == $ingredient->image)
                    <img src="{{ asset('img/ingredient/' . $ingredient->image) }}" class="img-preview img-fluid mb-3 d-block">
                @else
                    <img src="{{ asset('product-images/' . $ingredient->image) }}" class="img-preview img-fluid mb-3 d-block">
                @endif
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

        <button type="submit" class="button">Update Ingredient</button>

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
