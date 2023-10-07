<header>
    <nav class="navbar fixed-top navbar-expand-lg flex-column bg-white">
        <div class="container">
            <div class="nav-brand-wrapper d-flex">
                <button class="navbar-toggler border-0 d-block d-lg-none " id="menu_icon" role="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/logo.png') }}" class="Brand Logo" width="120" height="42">
                </a>
            </div>

            <div class="collapse navbar-collapse">
                <form class="w-50 input-group" role="search">
                    <input class="form-control" type="search" placeholder="What service are you looking for today?"
                        aria-label="search" aria-describedby="searchBtn">
                    <button class="btn btn-outline-secondary bg-dark text-white" type="button" id="searchBtn"><i
                            class="fa-solid fa-search"></i></button>
                </form>

                @if (Auth::user())
                    <ul class="navbar-nav align-items-center gap-1 ms-auto mb-2 mb-lg-0">
                        <!-- notification -->
                        <!-- Add this HTML to your navigation bar -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" style="font-size:25px;" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-regular fa-bell position-relative">
                                    @if (Auth::user()->unreadNotifications->count() > 0)
                                        <i class="fa-solid fa-circle position-absolute top-0" style="right: -7px;"></i>
                                    @endif
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end m-0 p-0" aria-labelledby="navbarDropdown">
                                <div class="card" style="width: 18rem; cursor:default;">
                                    <div class="card-header">
                                        Notifications
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <div class="card" style=" height:200px; overflow-y:scroll;">
                                            <ul class="list-group list-group-flush">
                                                @foreach (Auth::user()->notifications as $notification)
                                                    <li class="list-group-item">
                                                        <a
                                                            href="{{ route('single.notification.read', ['notification' => $notification->id]) }}">
                                                            {{ $notification->data['message'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </ul>
                                    <ul class="list-group list-group-flush text-center">
                                        <li>
                                            <a class="dropdown-item fw-bold"
                                                href="{{ route('clear.notifications') }}">Mark as Read</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- message -->
                        <li class="nav-item">
                            <a class="nav-link-i" href="#"><i
                                    class="fa-regular fa-envelope position-relative"></i></a>
                        </li>
                        <!-- list -->
                        <li class="nav-item me-2">
                            <a class="nav-link-i" href="#"><i
                                    class="fa-regular fa-heart position-relative"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page"
                                href="{{ route('orders.index') }}">Order</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page"
                                href="{{ route('seller.dashboard') }}">Switch to Selling</a>
                        </li>
                        @include('frontend.components.profile-dropdown')
                    </ul>
                @else
                    <ul class="pc-nvbar navbar-nav align-items-center gap-1 ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page" href="#">Become
                                a Seller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold" aria-current="page"
                                href="{{ route('login') }}">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success-hover fw-bold join" aria-current="page"
                                href="{{ route('register') }}">Join</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
        @if (in_array(Route::currentRouteName(), ['home', 'categories.show', 'gigs.show', 'gigs.subSubCategory']))
            @include('frontend.components.full_width_navbar')
        @endif
    </nav>
</header>

@include('frontend.components.mobile_navbar')
