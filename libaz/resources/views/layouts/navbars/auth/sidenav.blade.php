<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" data-color="dark">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ route('dashboard') }}">
            <img src="./img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 h4 font-weight-bold"></span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
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
                <a class="nav-link {{ str_contains(request()->url(), 'category') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'category']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#laravelExamples" class="nav-link collapsed active"
                    aria-controls="laravelExamples" role="button" aria-expanded="true">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center">
                        <i class="fab fa-laravel" style="color: #f4645f; font-size: large; font-weight: 500 "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laravel Examples </span>
                </a>
                <div class="collapse show" id="laravelExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link "
                                href="https://argon-dashboard-pro-laravel.creative-tim.com/user-profile">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> User Profile </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link "
                                href="https://argon-dashboard-pro-laravel.creative-tim.com/user-management">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> User Management </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link "
                                href="https://argon-dashboard-pro-laravel.creative-tim.com/role-management">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal"> Role Management </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link "
                                href="https://argon-dashboard-pro-laravel.creative-tim.com/category-management">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Category Management </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link "
                                href="https://argon-dashboard-pro-laravel.creative-tim.com/tag-management">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Tag Management </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link "
                                href="https://argon-dashboard-pro-laravel.creative-tim.com/item-management">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Items Management </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</aside>
