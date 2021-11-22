{{-- NAVBAR --}}
<header class="mb-3 fixed-top header" id="header">
    <nav class="navbar navbar-expand-md" id="navbar">
      <div class="container-md">
        <a class="navbar-brand" href="/">
          <img src="/img/logo/Logo3.svg" class="logo-image" alt="" />
        </a>
        <!-- <span class="logo-circle"></span> -->
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto pt-3 pt-sm-3 pt-md-0 pt-lg-0">
            <li class="nav-item visually-hidden">
              <a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('products*') ? 'active' : '' }}" href="/products">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}" href="/blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('outlet*') ? 'active' : '' }}" href="/outlet">Outlet</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ Request::is('promo*') ? 'active' : '' }}" href="/promo*">Promo</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about-us*') ? 'active' : '' }}" href="/about-us">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
