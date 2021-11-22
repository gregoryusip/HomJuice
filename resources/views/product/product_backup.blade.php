@extends('layouts.main')

@section('container')
    @include('product.product_filter')

    @if ($products->count())
        <div class="container mb-5">
            @if (request('category'))
                <p class="fs-4">{{ $filter_title }}</p>
            @endif
            <div class="row">
            <!-- PRODUCT 1 -->
            @foreach ($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <div class="card rounded-0 border-0 bg-transparent mb-3">
                    <a href="/products/{{ $product->slug }}">
                        <img
                        src="{{ asset('product-images/' . $product->image) }}"
                        {{-- class="product-image img-fluid rounded-0" --}}
                        class="img-fluid rounded-0"
                        alt="{{ $product->name }}"
                        />
                    </a>
                    <div class="card-body p-0">
                        <a href="/products?category={{ $product->category->slug }}" class="text-decoration-none category-name">
                            <p class="my-2">{{ $product->category->name }}</p>
                        </a>
                        <a href="/products/{{ $product->slug }}" class="text-decoration-none product-name">
                            <h5>{{ $product->name }}</h5>
                        </a>
                        <p >Rp. {{ $product->price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- END OF PRODUCT -->
            </div>
        </div>
    @else
        <p class="text-center fs-4 mb-5">No Products Found</p>
    @endif
@endsection
