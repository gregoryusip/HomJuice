<ul
    class="
    nav
    col-12 col-md-auto col-lg-auto col-xl-auto
    me-lg-auto
    my-3
    justify-content-center
    mb-md-3
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
                <li><a class="dropdown-item px-4 py-3 " href="/dashboard/products">All</a></li>
                @foreach ($categories as $category)
                    <li><a class="dropdown-item border-top px-4 py-3 " href="/dashboard/products?category={{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </li>
</ul>
