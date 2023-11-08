@include('layouts.inc.head')

<body class="{{ $class ?? '' }}">

    @guest
        @include('layouts.navbars.users.topnav')
        <main class="main-content  mt-0">
            @yield('content')
        </main>
    @endguest

    @auth
        @if (auth()->user()->username == 'admin')
            @if (in_array(request()->route()->getName(),
                    ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password']))
                @yield('content')
            @else
                <div class="min-height-300 bg-dark position-absolute w-100"></div>
                @include('layouts.navbars.auth.sidenav')
                <main class="main-content border-radius-lg">
                    @yield('content')
                </main>
            @endif
        @else
            @include('layouts.navbars.users.topnav')
            <main class="main-content  mt-0">
                @yield('content')
            </main>
        @endif
    @endauth

    @include('layouts.inc.foot')
