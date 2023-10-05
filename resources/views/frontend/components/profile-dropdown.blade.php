<li class="nav-item">
    <div class="dropdown">
        <a class="pro-pic-wrapper border rounded-circle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="https://cdn.icon-icons.com/icons2/2468/PNG/512/user_icon_149329.png" alt="Profile Picture"
                height="40" width="40" class="rounded-circle">
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li class="arrowUp"></li>
            <li>
                <a class="dropdown-item text-success-hover fw-bold"
                    href="{{ route('user.profile', ['rollout' => true]) }}">
                    Profile
                </a>

            </li>
            @if (in_array(Route::currentRouteName(), ['seller.dashboard']))
                <a class="dropdown-item text-success-hover fw-bold" href="{{ route('home') }}">Switch to
                    Buying</a>
            @endif
            <li><a class="dropdown-item text-success-hover fw-bold" href="{{ route('seller.dashboard') }}">Dashboard</a>
            </li>
            <li><a class="dropdown-item text-success-hover fw-bold" href="#">Post a
                    Request</a></li>
            <li><a class="dropdown-item text-success fw-bold" href="#">Refer a
                    friend</a></li>
            <li><a class="dropdown-item text-success-hover fw-bold border-top" href="#">Settings</a></li>
            <li><a class="dropdown-item text-success-hover fw-bold" href="#">Billing and
                    Payments</a></li>
            <li><a class="dropdown-item text-success-hover fw-bold border-top" href="#">English</a></li>
            <li><a class="dropdown-item text-success-hover fw-bold" href="#">$ USD</a>
            </li>
            <li><a class="dropdown-item text-success-hover fw-bold border-bottom" href="#">Help & support</a></li>
            <li>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item text-success-hover fw-bold" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</li>
