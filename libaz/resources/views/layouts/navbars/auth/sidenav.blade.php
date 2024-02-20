<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" data-color="dark">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ route('dashboard') }}">
            <img src="{{asset('./img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Users</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                    href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Admin Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'management-user') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'management-user']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Management</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">pages</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Books" class="nav-link collapsed {{ request()->routeIs('book.*') ? 'active' : '' }}" aria-controls="Books"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-book-open text-dark text-sm pb-2 opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Books</span>
                </a>
                <div class="collapse {{ request()->routeIs('book.*') ? 'show' : '' }}" id="Books" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link {{  request()->routeIs('book.book') ? 'active' : ''}}"
                                href="{{route('book.book')}}">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> Books </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'book.category' ? 'active' : ''}}"
                                href="{{ route('book.category')  }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'book.bookshelf' ? 'active' : ''}}"
                                href="{{ route('book.bookshelf')  }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal">Bookshelfs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'book.writer' ? 'active' : ''}}"
                                href="{{ route('book.writer')  }}">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal">Writers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'book.publisher' ? 'active' : ''}}"
                                href="{{ route('book.publisher')  }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal">Publishers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#items" class="nav-link collapsed {{ request()->routeIs('item.*') ? 'active' : '' }}" aria-controls="items"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-copy text-dark text-sm pb-2 opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">items</span>
                </a>
                <div class="collapse {{ request()->routeIs('item.*') ? 'show' : '' }}" id="items" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link {{  request()->routeIs('item.item') ? 'active' : ''}}"
                                href="{{route('item.item')}}">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> Items list </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'book.category' ? 'active' : ''}}"
                                href="{{ route('book.category')  }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal">Checkout items</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</aside>
