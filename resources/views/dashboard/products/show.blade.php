@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-md d-flex">
            <a href="/dashboard/products" class="back-button d-flex">
                <i class="uil uil-corner-up-left-alt fs-4 arrow-icon"></i>
                <p class="m-2 back-tag">Back</p>

            </a>
        </div>
    </div>
    <div class="row ">
        <div class="col-md">
            <img src="{{ asset('product-images/' . $product->image) }}" class="product-detail-image rounded-0" alt="{{ $product->name }}"/>
        </div>
        <div class="col-md">
            <a href="/dashboard/products?category={{ $product->category->slug }}" class="text-decoration-none ">
                <p class="mb-1 fs-6 product-detail-category-name">{{ $product->category->name }}</p>
            </a>
            <h1 class="mb-4">{{ $product->name }}  - {{ $product->size }}mL</h1>
            <p class="product-detail-body mb-4">{{ $product->body }}</p>
            <h6 class="mb-1">Ingredient:</h6>
            <p class="product-detail-ingredient mb-4">{{ $product->ingredient }}</p>
            <h6 class="mb-1">Benefit:</h6>
            <p class="product-detail-benefit mb-5">{{ $product->benefit }}</p>
            <h3 class="product-detail-price mb-5">Rp. @rupiah($product->price)</h3>

            <div class="row">
                <div class="col-md mb-3 border-bottom">
                    <h6>ORDER</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <a href="#"><img src="/img/logo/tokopedia.svg" alt="" class="order-platform-icon"></a>
                </div>
                <div class="col-md">
                    <a href="#"><img src="/img/logo/shopee.svg" alt="" class="order-platform-icon"></a>
                </div>
                <div class="col-md">
                    <a href="#"><img src="/img/logo/whatsapp-icon.svg" alt="" class="order-platform-icon"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
