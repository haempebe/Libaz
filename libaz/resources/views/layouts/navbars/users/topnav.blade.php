<!-- Navbar Dark -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white z-index-3 py-3">
    <div class="container">
        <a class="navbar-brand m-0 text-center" href="{{ route('home') }}">
            <div style="height: 2rem">
                <img src="{{asset('./img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 h5 font-weight-bold"></span>
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
                    <a class="btn shadow-none btn-sm px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'home' ? 'p-2 btn-dark text-white' : '' }}"
                        aria-current="page" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn shadow-none btn-sm px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'library' ? 'p-2 btn-dark text-white' : '' }}"
                        href="{{ route('library') }}">
                        Library
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn shadow-none btn-sm px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'request' ? 'p-2 btn-dark text-white' : '' }}"
                        href="{{ route('request') }}">
                        Request
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn shadow-none btn-sm px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'review' ? 'p-2 btn-dark text-white' : '' }}"
                        aria-current="page" href="{{ route('review') }}">
                        Review
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn shadow-none btn-sm px-4 mx-lg-2 mb-0 {{ Route::currentRouteName() == 'about' ? 'p-2 btn-dark text-white' : '' }}"
                        href="{{ route('about') }}">
                        About
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                @guest
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
                @endguest
                @auth
                    <div class="dropdown">
                        <a href="#" id="profileDropdownToggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="/img/team-2.jpg" class="rounded-circle me-3"height="30" alt="">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ auth()->user()->username }}</h6>
                                    <p class="text-xs text-secondary mb-0">{{ auth()->user()->email }}</p>
                                </div>
                                <div class="dropdown-toggle" id="toggle"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profileDropdownToggle" style="">
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-user me-sm-1"></i>
                                        <span class="d-sm-inline d-none">Log out</span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
@section('scriptNav')
<script>
    const toggler = document.querySelector("#profileDropdownToggle");
    toggler.addEventListener("click", function() {
        document.querySelector("#toggle").classList.toggle("show");
    });
</script>
@endsection
