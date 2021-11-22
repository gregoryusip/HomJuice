<!-- CARDS -->
<div class="container mb-5">
    <div class="row mb-3">
      <div class="col-8 col-md-10 col-lg-10 col-xl-11">
        <h2 class="main-subtitle">Our Products</h2>
      </div>
      <div class="col-4 col-md-2 col-lg-2 col-xl-1">
            <div class="row">
                <div class="col-6 d-flex justify-content-end">
                    <div class="btn-carousel-prev">
                        <i class="uil uil-angle-left-b fs-3 arrow-icon"></i>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end pe-3">
                    <div class="btn-carousel-next">
                        <i class="uil uil-angle-right-b fs-3 arrow-icon"></i>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <div class="row product-carousel owl-carousel owl-theme">
      <!-- PRODUCT -->
      @foreach ($products as $product)
      <div class="col-md mx-2">
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
            <p >Rp. {{ $product->price }}</p>
          </div>
        </div>
      </div>
      @endforeach
      <!-- END OF PRODUCT -->
    </div>
</div>

