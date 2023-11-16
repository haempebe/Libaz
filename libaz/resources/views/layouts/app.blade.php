@include('layouts.inc.head')

<body class="{{ $class ?? '' }}">

    @guest
        @if (in_array(request()->route()->getName(),
                ['sign-in', 'sign-up', 'login', 'register', 'recover-password']))
            <main class="main-content  mt-0">
                @yield('content')
            </main>
        @else
            @include('layouts.navbars.users.topnav')
            <main class="main-content  mt-0 pt-md-7 pt-6 mt-2">
                @yield('content')
            </main>
            @include('layouts.footers.users.footer')
        @endif
    @endguest

    @auth
        @if (auth()->user()->username == 'admin')
            @if (in_array(request()->route()->getName(),
                    ['login', 'register', 'recover-password']))
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
            <main class="main-content  mt-0 pt-md-7 pt-6 mt-2">
                @yield('content')
            </main>
            @include('layouts.footers.users.footer')
        @endif
    @endauth

    @include('layouts.inc.foot')
