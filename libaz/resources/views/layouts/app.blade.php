@include('layouts.inc.head')

@if (in_array(request()->route()->getName(),
['login', 'register', 'recover-password', 'reset-password']))
    <body class="{{ $class ?? '' }} bg-dark">
        @guest
            <main class="main-content  mt-0">
                @yield('content')
            </main>
        @endguest
@else
    <body class="{{ $class ?? '' }} ">
        @guest
            @include('layouts.navbars.users.topnav')
            <main class="main-content pt-md-6 pt-6 mt-2">
                @yield('content')
            </main>
            @include('layouts.footers.users.footer')
        @endguest
@endif


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
            <main class="main-content pt-md-6 pt-6 mt-2">
                @yield('content')
            </main>
            @include('layouts.footers.users.footer')
        @endif
    @endauth

    @include('layouts.inc.foot')
