@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">HOMJUICE Ingredients</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row mb-3">
    <div class="col-md-3 mt-1">
        <a href="/dashboard/ingredients/create" class="btn mb-3 button">Create new ingredient</a>
    </div>
    <div class="col-md-5 mt-3">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="/dashboard/categories">
            {{-- @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif --}}

            @include('partials.search_bar')
        </form>

    </div>
</div>

<div class="table-responsive col-lg-8 mb-5">
    <table class="table table-striped table-md">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Category Name</th>
          <th scope="col">Category Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @if ($ingredients->count())
            @foreach ($ingredients as $ingredient)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ingredient->name }}</td>
                <td>
                    @if ( ($ingredient->slug . '.jpg') == $ingredient->image  or ($ingredient->slug . '.png') == $ingredient->image )
                    <img src="{{ asset('img/ingredient/' . $ingredient->image) }}" class="img-fluid mb-3" alt="{{ $ingredient->name }}" style="width: 50px">
                    @else
                    <img src="{{ asset('product-images/' . $ingredient->image) }}" class="img-fluid mb-3" alt="{{ $ingredient->name }}" style="width: 50px">
                    @endif
                </td>
                <td>
                    <a href="/dashboard/ingredients/{{ $ingredient->slug }}/edit" class="badge bg-warning action-button m-1">
                        <i class="uil uil-edit"></i>
                    </a>
                    <form action="/dashboard/ingredients/{{ $ingredient->slug }}" method="POST" class="d-inline">
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
              <p class="text-center fs-4 mb-5">No Ingredients Found</p>
          </tr>
          @endif
      </tbody>
    </table>
</div>
@endsection
