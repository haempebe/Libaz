<!-- Navbar Dark -->
<nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
    <div class="container">
        <a class="navbar-brand m-0 text-center" href="{{ route('home') }}">
            <div style="height: 1.6rem">
                <img src="./img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 h6 font-weight-bold">LIBAZ</span>
            </div>
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="btn shadow-none btn-sm text-start px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'home' ? 'p-2 btn-dark text-white' : '' }}"
                        aria-current="page" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn shadow-none btn-sm text-start px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'register' ? 'p-2 btn-dark text-white' : '' }}"
                        href="{{ route('register') }}">
                        Sign Up
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn shadow-none btn-sm text-start px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'login' ? 'p-2 btn-dark text-white' : '' }}"
                        href="{{ route('login') }}">
                        Sign In
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <div class="d-flex">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-sm mb-0 me-1 px-3 btn-dark">
                            <i class="fas fa-key me-1"></i> Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-sm mb-0 me-1 px-3 btn-outline-dark">
                            <i class="fas fa-user-circle me-1"></i> Sign Up</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
