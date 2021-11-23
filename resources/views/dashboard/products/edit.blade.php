@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Product</h1>
</div>

<div class="row mb-3">
    <div class="col-md d-flex">
        <a href="/dashboard/products" class="back-button d-flex">
            <i class="uil uil-corner-up-left-alt fs-4 arrow-icon"></i>
            <p class="m-2 back-tag">Back</p>
        </a>
    </div>
</div>

<div class="col-lg-8">
    <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-md mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Product Name" required autofocus value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-3 mb-3">
            <label for="size" class="form-label">Product Size</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('size') is-invalid @enderror" id="size" name="size" placeholder="Size" required value="{{ old('size', $product->size) }}">
                <span class="input-group-text" id="basic-addon1">mL</span>
            </div>
            @error('size')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="slug" class="form-label">Product Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Slug" required readonly value="{{ old('slug', $product->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if (old('category_id', $product->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    @endif
                 @endforeach
            </select>
        </div>

        <div class="col-md mb-3">
            <label for="ingredient" class="form-label">Product Ingredient</label>
            <input type="text" class="form-control @error('ingredient') is-invalid @enderror" id="ingredient" name="ingredient" placeholder="Ingredient" required value="{{ old('ingredient', $product->ingredient) }}">
            @error('ingredient')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="ingredient_product" class="form-label">Product Ingredient</label>
            <br>
            <div class="row">
                @foreach ($ingredients as $ingredient)
                <div class="col-md-3 mb-2">
                    <input type="checkbox" name="ingredient_product[]" id="ingredient_product" value="{{$ingredient->id}}" {{ $product->ingredients->contains($ingredient->id) ? 'checked' : '' }}> <label>{{$ingredient->name}}</label>
                </div>
                @endforeach
            </div>
            @error('ingredient')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="benefit" class="form-label">Product Benefit</label>
            <input type="text" class="form-control @error('benefit') is-invalid @enderror" id="benefit" name="benefit" placeholder="Benefit" required value="{{ old('benefit', $product->benefit) }}">
            @error('benefit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-3 mb-3">
            <label for="price" class="form-label">Product Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rp.</span>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" required value="{{ old('price', $product->price) }}">
            </div>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="body" class="form-label">Product Description</label>
            <textarea rows="4" class="form-control  @error('body') is-invalid @enderror" id="body" name="body" placeholder="Description" required>{{ old('body', $product->body) }}</textarea>
            @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="tokopedia_link" class="form-label">Tokopedia Link</label>
            <label for="" class="form-label">(Jika tidak ada ketik '#')</label>
            <input type="text" class="form-control @error('tokopedia_link') is-invalid @enderror" id="tokopedia_link" name="tokopedia_link" placeholder="Tokopedia Link" required value="{{ old('tokopedia_link', $product->tokopedia_link) }}">
            @error('tokopedia_link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md mb-3">
            <label for="shopee_link" class="form-label">Shopee Link</label>
            <label for="" class="form-label">(Jika tidak ada ketik '#')</label>
            <input type="text" class="form-control @error('shopee_link') is-invalid @enderror" id="shopee_link" name="shopee_link" placeholder="Shopee Link" required value="{{ old('shopee_link', $product->shopee_link) }}">
            @error('shopee_link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="image" class="form-label">Product Image</label>
            <input type="hidden" name="oldImage" value="{{ $product->image }}">
            @if ($product->image)
                <img src="{{ asset('product-images/' . $product->image) }}" class="img-preview img-fluid mb-3 d-block">
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

        <button type="submit" class="button">Update Product</button>

    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const size = document.querySelector('#size');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/products/checkSlug?name=' + name.value)
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
