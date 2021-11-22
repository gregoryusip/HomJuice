@extends('layouts.main')

@section('container')
    <div class="container main-container py-5 mb-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                {{-- <div class="row-cols-2"> --}}
                    <div class="col-12 col-md-auto col-lg-auto">
                        {{-- <form class="col-12 col-md-auto col-lg-auto me-lg-0 mb-5" action="/products"> --}}
                        <form class="mb-3 mb-md-3 mb-lg-4" action="/products">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif

                            @include('partials.search_bar')
                        </form>
                    </div>
                    <div class="col-12 mb-3 mb-md-3 mb-lg-5">
                        <ul class="list-unstyled ps-0">
                            <li class="mb-1">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#product-categories" aria-expanded="true">
                                    <div class="row ">
                                        <div class="col-10">
                                            <h5>Category</h5>
                                        </div>
                                        <div class="col-2 d-flex justify-content-end">
                                            <button class="btn btn-toggle align-items-center" data-bs-toggle="collapse" data-bs-target="#product-categories" aria-expanded="true">
                                                <i class="uil uil-angle-right-b p-0 arrow-icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                                <div class="collapse show" id="product-categories">
                                  <ul class="btn-toggle-nav list-unstyled fw-normal">
                                      <li class="py-2"><a href="/products">All</a></li>
                                      @foreach ($categories as $category)
                                        <li class="py-2"><a href="/products?category={{ $category->slug }}">{{ $category->name }}</a></li>
                                      @endforeach
                                  </ul>
                                </div>
                              </li>
                        </ul>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 p-0 m-0">
                @if ($products->count())
                <div class="container">
                    @if (request('category'))
                        {{-- <p class="fs-4">{{ $filter_title }}</p> --}}
                        <div class="row justify-content-center mb-1 mb-lg-3">
                            <div class="col-md-12">
                                <p class="breadcrumbs fs-4">Product <span class="mx-1 mx-md-2">/</span> {{ $filter_title }}</p>
                            </div>
                        </div>
                    @else
                        <div class="row justify-content-center mb-1 mb-lg-3">
                            <div class="col-md-12">
                                <p class="breadcrumbs fs-4">All Products</p>
                            </div>
                        </div>

                    @endif
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card rounded-0 border-0 bg-transparent mb-3">
                                <div class="product-image">
                                    <a href="/products/{{ $product->slug }}">
                                        <img
                                        src="{{ asset('product-images/' . $product->image) }}"
                                        {{-- class="product-image img-fluid rounded-0" --}}
                                        class="img-fluid rounded-0"
                                        alt="{{ $product->name }}"
                                        />
                                    </a>
                                    <div class="product-image-detail">
                                        <a href="/products/{{ $product->slug }}" class="button">Show Detail</a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <a href="/products?category={{ $product->category->slug }}" class="text-decoration-none category-name">
                                        <p class="my-2">{{ $product->category->name }}</p>
                                    </a>
                                    <a href="/products/{{ $product->slug }}" class="text-decoration-none product-name">
                                        <h5>{{ $product->name }}</h5>
                                    </a>
                                    <p >Rp. @rupiah($product->price)</p>
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
            </div>
        </div>
    </div>


@endsection
