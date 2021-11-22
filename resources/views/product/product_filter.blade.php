<!-- FILTER -->
<div class="container-md px-3 mb-5">
  <div
    class="
      d-flex
      flex-wrap
      align-items-center
      justify-content-center justify-content-lg-start
      filter
      p-3
    "
  >
    <ul
      class="
        nav
        col-12 col-md-auto col-lg-auto
        me-md-auto me-lg-auto
        mb-3
        justify-content-center
        mb-md-0
      "
    >
      <li>
        <div class="dropdown">
          <a
            class="button-filter dropdown-toggle"
            href="#"
            role="button"
            id="dropdownMenuLink"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Category
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item px-4 py-3 " href="/products">All</a></li>
            @foreach ($categories as $category)
                <li><a class="dropdown-item border-top px-4 py-3 " href="/products?category={{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </div>
      </li>
    </ul>

    <form class="col-12 col-md-auto col-lg-auto mb-lg-0 me-lg-3" action="/products">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif

        @include('partials.search_bar')
    </form>
    {{-- @include('partials.search_bar') --}}
  </div>
</div>
