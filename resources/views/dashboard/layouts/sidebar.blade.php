<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-header d-flex justify-content-between align-items-center px-3 mt-4 mb-3 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item border-top border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="file-text"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="/dashboard/products">
                    <span data-feather="file"></span>
                    Products
                </a>
            </li>
            <li class="nav-item border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file"></span>
                    Blogs
                </a>
            </li>
            <li class="nav-item border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="file"></span>
                    Categories
                </a>
            </li>
            <li class="nav-item border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard/ingredients*') ? 'active' : '' }}" href="/dashboard/ingredients">
                    <span data-feather="file"></span>
                    Ingredients
                </a>
            </li>
            <li class="nav-item border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard/outlets*') ? 'active' : '' }}" href="/dashboard/outlets">
                    <span data-feather="file"></span>
                    Outlet
                </a>
            </li>
            <li class="nav-item border-bottom py-2">
                <a class="nav-link {{ Request::is('dashboard/admins*') ? 'active' : '' }}" href="/dashboard/admins">
                    <span data-feather="file"></span>
                    Admins
                </a>
            </li>
        </ul>

        {{-- @can('is_admin')
        <h6 class="sidebar-header d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Product Categories
                </a>
            </li>
        </ul>
        @endcan --}}
    </div>
</nav>
