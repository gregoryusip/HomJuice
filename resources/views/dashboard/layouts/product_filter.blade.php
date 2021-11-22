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
        @include('partials.category_filter')

        <form class="col-12 col-md-auto col-lg-auto mb-3 mb-lg-0 me-lg-3" action="/dashboard/products">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @include('partials.search_bar')
        </form>
    </div>
  </div>
