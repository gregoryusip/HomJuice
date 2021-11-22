@extends('layouts.main')

@section('container')
    <div class="container main-container mb-5 py-5">
        <div class="row">
            <div class="col-md-4 mb-3 text-center text-md-start">
                <h1 class="main-title mb-4">Lokasi Homjuice</h1>
                <p class="mb-3">Kami memiliki banyak outlet yang tersebar di beberapa daerah.</p>
            </div>
            <div class="col-md-8">
                <ul class="list-unstyled ps-0">
                    @foreach ($outlets as $outlet)
                    <li class="mb-1 outlet-location py-3">
                        <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $outlet->slug }}" aria-expanded="false">
                            <div class="row ">
                                <div class="col-10">
                                    <h6 class="outlet_name">{{ $outlet->name }}</h6>
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <button class="btn btn-toggle align-items-center" data-bs-toggle="collapse" data-bs-target="#{{ $outlet->slug }}">
                                        <i class="uil uil-angle-right-b p-0 arrow-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                      <div class="collapse" id="{{ $outlet->slug }}">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <div class="row">
                                <div class="col-lg-6 my-3">
                                    <li>{{ $outlet->address }}</li>
                                </div>
                                <div class="col-lg-6 my-3 outlet_map" >
                                    {!! $outlet->map !!}
                                </div>
                            </div>
                        </ul>
                      </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
