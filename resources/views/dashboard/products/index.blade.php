@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">HOMJUICE Products</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col-md-3 mt-2">
        <a href="/dashboard/products/create" class="btn mb-3 button">Create new product</a>
    </div>

    <div class="col-md-9 col-lg-5">
        @include('dashboard.layouts.product_filter')
    </div>
</div>

<div class="table-responsive col-lg-8">
    @if (request('category'))
        <p class="fs-4">{{ $filter_title }}</p>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @if ($products->count())
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>Rp. @rupiah($product->price)</td>
                <td>
                    <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info action-button m-1">
                        <i class="uil uil-eye"></i>
                    </a>
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning action-button m-1">
                        <i class="uil uil-edit"></i>
                    </a>
                    <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0 action-button m-1" onclick="return confirm('Are you sure?')">
                            <i class="uil uil-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
          @else
          <tr>
              <p class="text-center fs-4 mb-5">No Products Found</p>
          </tr>
          @endif
      </tbody>
    </table>
</div>
@endsection
