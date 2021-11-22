@extends('layouts.main')

@section('container')
    <div class="container main-container pt-5 mb-1">
        <div class="row mb-1 mb-lg-3">
            {{-- <div class="col-md d-flex">
                <a href="/products" class="back-button d-flex">
                    <i class="uil uil-corner-up-left-alt fs-4 arrow-icon"></i>
                    <p class="m-2">Back</p>
                </a>
            </div> --}}
            <div class="col-md-10 col-lg-7">
                <p class="breadcrumbs"><a href="/products">Product</a> <span class="mx-1 mx-md-2">/</span> <a href="/products?category={{ $product->category->slug }}">{{ $product->category->name }}</a> <span class="mx-1 mx-md-2">/</span> {{ $product->name }}</p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-6">
                {{-- <img src="{{ asset('product-images/' . $product->image) }}" class="product-detail-image rounded-0" alt="{{ $product->name }}"/> --}}
                <img src="{{ asset('product-images/' . $product->image) }}" class="img-fluid rounded-0 pb-3" alt="{{ $product->name }}"/>
            </div>
            <div class="col-md-6">
                <p class="mb-1 fs-5 product-detail-category-name">{{ $product->category->name }}</p>
                {{-- <a href="/products?category={{ $product->category->slug }}" class="text-decoration-none ">
                </a> --}}
                <h1 class="mb-4">{{ $product->name }}  - {{ $product->size }}mL</h1>
                <p class="product-detail-body mb-4">{{ $product->body }}</p>
                <h6 class="mb-1">Ingredient:</h6>
                <ol class="list-group list-group-numbered px-2 mb-4">
                    @foreach ($product->ingredients as $ingredient)
                    <li class="">{{ $ingredient->name }}</li>
                    @endforeach
                </ol>
                <h6 class="mb-1">Benefit:</h6>
                <p class="product-detail-benefit mb-5">{{ $product->benefit }}</p>
                <h3 class="product-detail-price mb-5">Rp. @rupiah($product->price)</h3>

                <div class="row align-items-center justify-content-start">
                    <div class="col-md-12 col-lg-3 mb-2 mb-lg-0">
                        <h5>ORDER AT</h5>
                    </div>
                    <div class="col-2">
                        <a href="{{ $product->tokopedia_link }}" target="_blank"><img src="/img/logo/tokopedia.svg" alt="" class="img-fluid order-platform-icon"></a>
                    </div>
                    <div class="col-2">
                        <a href="{{ $product->shopee_link }}" target="_blank"><img src="/img/logo/shopee.svg" alt="" class="img-fluid order-platform-icon"></a>
                    </div>
                    <div class="col-2">
                        <a href="#"><img src="/img/logo/whatsapp-icon.svg" alt="" class="img-fluid order-platform-icon"></a>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col">
                        <a href="{{ $product->tokopedia_link }}" target="_blank"><img src="/img/logo/tokopedia.svg" alt="" class="img-fluid order-platform-icon"></a>
                    </div>
                    <div class="col">
                        <a href="{{ $product->shopee_link }}" target="_blank"><img src="/img/logo/shopee.svg" alt="" class="img-fluid order-platform-icon"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="/img/logo/whatsapp-icon.svg" alt="" class="img-fluid order-platform-icon"></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container-fluid container-ingredient py-5 mb-5">
        <div class="container">
            <div class="row text-center mb-4 mb-md-5">
                <h1 class="mb-2">Ingredients</h1>
                <h6 class="title-subtitle ">here are the ingredients and its benefits!</h6>
            </div>
            <div class="row justify-content-center">
                @foreach ($product->ingredients as $ingredient)
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card why-homjuice-card">
                            <div class="card-body text-center px-3 py-4">
                                <img src="{{ asset('img/ingredient/' . $ingredient->image) }}" class="img-fluid mb-3" alt="{{ $ingredient->name }}" style="width: 100px">
                                <h5 class="card-title">{{ $ingredient->name }}</h5>
                                <p class="card-text">{{ $ingredient->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-2 text-center">
            <div class="col-md-12 col-lg-8 col-xl-8">
                <h3 style="font-weight: 900">Share this product</h3>
            </div>
        </div>
        <div class="row justify-content-center mb-5 text-center">
            <div class="col-12 fs-4 share-icon">
                <button>
                    <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=https://homjuice.com/products/' . $product->slug }}" target="_blank" rel="noopener" aria-label="Share on Facebook">
                        <i class="uil uil-facebook-f mx-2"></i>
                    </a>
                </button>
                <button>
                    <a href="{{ 'http://twitter.com/share?text=' . $product->name . '&url=https://homjuice.com/products/' . $product->slug }}" target="_blank" rel="noopener" aria-label="Share on Twitter">
                        <i class="uil uil-twitter mx-2"></i>
                    </a>
                </button>
                <button>
                    <a href="{{ 'https://api.whatsapp.com/send?text=' . $product->name . ' https://homjuice.com/products/'. $product->slug }}" target="_blank" rel="noopener" aria-label="Share on WhatsApp">
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
