<header>
    <nav class="navbar sticky-top navbar-expand-lg flex-column bg-white">
        <div class="container">
            <div class="nav-brand-wrapper d-flex">
                <button class="navbar-toggler border-0 d-block d-lg-none "  id="menu_icon" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="frontend/logo.png" class="Brand Logo" width="120" height="42">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <form class="w-50 input-group" role="search">
                    <input class="form-control" type="search" placeholder="What service are you looking for today?" aria-label="search" aria-describedby="searchBtn">
                    <button class="btn btn-outline-secondary bg-dark text-white" type="button" id="searchBtn"><i class="fa-solid fa-search"></i></button>
                </form>
                @if(Auth::user())
                    <ul class="navbar-nav align-items-center gap-1 ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link-i" href="#"><i class="fa-regular fa-bell position-relative"><i class="fa-solid fa-circle position-absolute top-0"></i></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-i" href="#"><i class="fa-regular fa-envelope position-relative"></i></a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link-i" href="#"><i class="fa-regular fa-heart position-relative"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success fw-bold" href="#">Switch to Selling</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="pro-pic-wrapper border rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://cdn.icon-icons.com/icons2/2468/PNG/512/user_icon_149329.png" alt="Profile Picture" height="40" width="40" class="rounded-circle">
                                </a>                            
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="arrowUp"></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold" href="#">Profile</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold" href="#">Dashboard</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold" href="#">Post a Request</a></li>
                                    <li><a class="dropdown-item text-success fw-bold" href="#">Refer a friend</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold border-top" href="#">Settings</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold" href="#">Billing and Payments</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold border-top" href="#">English</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold" href="#">$ USD</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold border-bottom" href="#">Help & support</a></li>
                                    <li><a class="dropdown-item text-success-hover fw-bold" href="#">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                @else
                    <ul class="pc-nvbar navbar-nav align-items-center gap-1 ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page" href="#">Become a Seller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page" href="{{route('login')}}">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold join" aria-current="page" href="{{route('register')}}">Join</a>
                        </li>
                    </ul>
                @endif
            </div>
            <div class="mobile-navbar d-flex d-lg-none justify-content-between align-items-center ps-4">
                <form role="search">
                    <input class="form-control" type="search" placeholder="Find Services" aria-label="search" aria-describedby="searchBtn">
                </form>
                <div class="dropdown d-none d-md-block">
                    <a class="pro-pic-wrapper border rounded-circle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://cdn.icon-icons.com/icons2/2468/PNG/512/user_icon_149329.png" alt="Profile Picture"
                            class="w-100 h-100 rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="arrowUp"></li>
                        <li><a class="dropdown-item text-success-hover fw-bold" href="#">Profile</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold" href="#">Post a Request</a></li>
                        <li><a class="dropdown-item text-success fw-bold" href="#">Refer a friend</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold border-top" href="#">Settings</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold" href="#">Billing and Payments</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold border-top" href="#">English</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold" href="#">$ USD</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold border-bottom" href="#">Help & support</a></li>
                        <li><a class="dropdown-item text-success-hover fw-bold" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @include('frontend.components.full_width_navbar')
    </nav>
    @include('frontend.components.mobile_navbar')
</header>