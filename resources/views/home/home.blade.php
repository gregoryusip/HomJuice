@extends('layouts.main')

@section('container')
    @include('home.home_landing_page')

    @include('home.home_carousel_products')

    <div class="container p-3">
        <div class="row mb-5 text-center">
            <h2 class="main-subtitle mb-2">Why Homjuice</h2>
            <h6 class="title-subtitle mb-2 mb-lg-3">here are the reason why you should choose Homjuice!</h6>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 col-xl-3 mb-2">
                <div class="card why-homjuice-card">
                    <div class="card-body text-center p-4">
                        <img src="img/asset/blender.png" class="why-homjuice-image mb-3" alt="Blender">
                        <h5 class="card-title">Cold Press Juice</h5>
                        <p class="card-text">Homjuice diproduksi dengan proses cold press, maka jus yang dibuat selalu fresh.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-2">
                <div class="card why-homjuice-card">
                    <div class="card-body text-center p-4">
                        <img src="img/asset/food-safety.png" class="why-homjuice-image mb-3" alt="Blender">
                        <h5 class="card-title">Aman Dikonsumsi</h5>
                        <p class="card-text">Homjuice diproduksi tanpa pengawet, pewarna, dan gula tambahan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-2">
                <div class="card why-homjuice-card">
                    <div class="card-body text-center p-4">
                        <img src="img/asset/vitamins.png" class="why-homjuice-image mb-3" alt="Blender">
                        <h5 class="card-title">Kaya Vitamin</h5>
                        <p class="card-text">Juice pada Homjuice kaya akan vitamin dan banyak manfaatnya bagi tubuh.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-2">
                <div class="card why-homjuice-card">
                    <div class="card-body text-center p-4">
                        <img src="img/asset/healthy-food.png" class="why-homjuice-image mb-3" alt="Blender">
                        <h5 class="card-title">100% Buah & Sayuran</h5>
                        <p class="card-text">Bahan produksi yang digunakan oleh Homjuice 100% Buah dan Sayuran asli.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid container-md container-order-now pt-5 pb-3 mb-5" id="order-now">
        <div class="row align-items-center justify-content-center text-center text-md-start">
            <div class="col-md-5 mb-3 d-flex justify-content-center">
                {{-- <div class="order-now-image"> --}}
                    <img src="/img/product/kiwi-1.jpg" alt="" class="img-fluid order-now-image">
                {{-- </div> --}}
            </div>
            <div class="col-md-6 mx-md-1 mx-lg-2">
                <h1 class="mb-3" style="font-weight: 700">Order Your Juice Now</h1>
                <p class="order-now-subtitle fs-5 mb-5">Dapatkan Homjuice sekarang juga, dengan cara memesan melalui platform yang tersedia di bawah ini!</p>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-sm-3 col-md-4 col-lg-3 col-xl-2 mb-2 mx-1">
                        <a href=""><button class="platform-button" style="--i: #3CAF41">Tokopedia</button></a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3 col-xl-2 mb-2 mx-1">
                        <a href=""><button class="platform-button" style="--i: #EA501F">Shopee</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5 mb-5">
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="/outlet">
                    <div class="services__box" style="--i:#5DBBB1">
                        <figure class="services__icon">
                            <i class="uil uil-location-point"></i>
                        </figure>
                        <div class="services__content">
                          <h2 class="services__title">
                            Outlet Location
                          </h2>
                          {{-- <p class="services__description">
                            Check out our outlet location to grab your juice!
                          </p> --}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="/about-us">
                    <div class="services__box">
                        <figure class="services__icon" style="--i:#F36945">
                            <i class="uil uil-info-circle"></i>
                        </figure>
                        <div class="services__content">
                          <h2 class="services__title">
                            About Us
                          </h2>
                          {{-- <p class="services__description">
                            Check out the description about us!
                          </p> --}}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- <div class="container pb-5 mb-5">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-32a716aa-948b-458c-85c4-fbf0648e7966"></div>
    </div> --}}

@endsection
