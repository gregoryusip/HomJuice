@extends('layouts.main')

@section('container')
<div class="container main-container py-5 mb-5">
    <div class="row mb-4 text-center justify-content-center">
        <div class="col-12 col-lg-10">
            <h2 class="main-title">What is Homjuice?</h2>
        </div>
    </div>
    <div class="row mb-3 text-center justify-content-center">
        <div class="col-12 col-lg-10">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores minus in reprehenderit voluptas non? Enim ipsam ut sequi minima labore nesciunt. Quo, quos. Corrupti, nam sint non eum est a suscipit autem. Sapiente aliquid at repellat, voluptate nihil facere quisquam beatae? Quasi molestiae quis veritatis, minus consequuntur, nesciunt eos explicabo fugiat deleniti voluptas assumenda vitae dolores recusandae magni quo aliquid rerum? Alias hic ducimus quisquam corporis fugit libero labore, similique obcaecati illo dolorum modi laborum velit culpa maiores. Quod placeat velit quisquam, natus, est ea maiores omnis commodi a error illo itaque excepturi sapiente. Dolore sequi alias aperiam iusto labore.
            </p>
        </div>
    </div>
    <div class="row mb-5 text-center justify-content-center">
        <div class="col-10 text-center">
            <img src="/img/logo/Logo3.svg" alt="" class="img-fluid" style="width: 300px;">
        </div>
    </div>
    <div class="row mb-5 text-center justify-content-center">
        <div class="col-sm-2 col-md-3 col-lg-2 mb-3 text-center border-end">
            <h2 class="item-count">{{ $products_count }}</h2>
            <h6>Products</h6>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 mb-3 text-center border-end">
            <h2 class="item-count">{{ $categories_count }}</h2>
            <h6>Categories</h6>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 mb-3 text-center">
            <h2 class="item-count">{{ $outlets_count }}</h2>
            <h6>Outlets</h6>
        </div>
    </div>
</div>
@endsection
