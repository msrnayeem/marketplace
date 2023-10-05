<header>
    <nav class="navbar fixed-top navbar-expand-lg flex-column bg-white">
        <div class="container">
            <div class="nav-brand-wrapper d-flex">
                <button class="navbar-toggler border-0 d-block d-lg-none " id="menu_icon" role="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ route('seller.dashboard') }}">
                    <img src="{{ asset('frontend/logo.png') }}" class="Brand Logo" width="120" height="42">
                </a>
            </div>

            <div class="collapse navbar-collapse">

                <div class="btn-group me-4">
                    <a class="dropdown-item" type="button" href="{{ route('seller.dashboard') }}">Dashboard</a>
                </div>
                <div class="btn-group me-2">
                    <a type="button" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        My Business
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li>
                            <a href="{{ route('orders.index') }}" class="dropdown-item" type="button">Orders</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" type="button">Gigs</a></li>
                        <li><a class="dropdown-item" type="button">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" type="button">Earnings</a></li>
                        <li><a class="dropdown-item" type="button">Fiver Workspace</a></li>
                    </ul>
                </div>
                <div class="btn-group me-2">
                    <a type="button" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        Growth & Marketing
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" type="button">Scale Your Business</a></li>
                        <li><a class="dropdown-item" type="button">Contact</a></li>
                        <li><a class="dropdown-item" type="button">Fiver learn</a></li>
                    </ul>
                </div>
                <div class="btn-group me-2">
                    <a type="button" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        Analytics
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" type="button">Overview</a></li>
                        <li><a class="dropdown-item" type="button">Repeat Business</a></li>
                    </ul>
                </div>

                <ul class="navbar-nav align-items-center gap-1 ms-auto mb-2 mb-lg-0">
                    <!-- notification -->
                    <!-- Add this HTML to your navigation bar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" style="font-size:25px;" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                <li class="list-group-item"> {{ $notification->data['message'] }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </ul>
                                <ul class="list-group list-group-flush text-center">
                                    <li>
                                        <a class="dropdown-item fw-bold" href="{{ route('clear.notifications') }}">Mark
                                            as Read</a>
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

                    <li class="nav-item">
                        <a class="nav-link text-success-hover fw-bold" aria-current="page"
                            href="{{ route('orders.index') }}">Order</a>
                    </li>

                    @include('frontend.components.profile-dropdown')
                </ul>
            </div>
        </div>

    </nav>
</header>
