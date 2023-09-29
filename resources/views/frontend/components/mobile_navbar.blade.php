<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-body">
        <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item nav-link d-flex align-items-center gap-2 mb-3">
                <div class="pro-pic-wrapper border rounded-circle">
                    <img src="https://cdn.icon-icons.com/icons2/2468/PNG/512/user_icon_149329.png" alt="Profile Picture"
                        class="w-100 h-100 rounded-circle">
                </div>
                <a href="" class="fw-500 text-dark">User Name</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Inbox</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Lists</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500 accordion" data-target="categories">Browse categories <small
                        class="accordion-icon"></small></a>
                <ul class="nav panel" id="categories-panel">
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a href="#" class="nav-link fw-500 accordion" data-target="{{ $category->key }}">
                                {{ $category->name }}
                                <small class="accordion-icon"></small>
                            </a>
                            <ul class="nav panel" id="{{ $category->key }}-panel">
                                @foreach ($category->subCategories as $subCategory)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link fw-500">{{ $subCategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500 accordion" data-target="explore">Explore<small
                        class="accordion-icon"></small></a>
                <ul class="nav panel" id="explore-panel">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Discover</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Guides</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Learn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Logo Maker</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Community</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Podcast</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Blog</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500 accordion" data-target="business">Business solutions<small
                        class="accordion-icon"></small></a>
                <ul class="nav panel" id="business-panel">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Fiver pro</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Fiver Certified</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Fiver Enterprise</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column my-4">
            <li class="nav-item nav-link border-bottom text-dark fw-500">Buying</li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Post a Request</a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column my-4">
            <li class="nav-item nav-link border-bottom text-dark fw-500">Selling</li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Start Selling</a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column my-4">
            <li class="nav-item nav-link border-bottom text-dark fw-500">General</li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Settings</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Billing and payments</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500">Logout</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500 accordion" data-target="lang"><span>English<i
                            class="fa-solid fa-globe ms-2"></i></span><small class="accordion-icon"></small></a>
                <ul class="nav panel" id="lang-panel">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">English</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Deutsch</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">Espanol</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-500 accordion" data-target="currency">$ USD<small
                        class="accordion-icon"></small></a>
                <ul class="nav panel" id="currency-panel">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">USD - $</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">EUR - €</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">GBP - £</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">AUD - A$</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">CAD - CA$</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">ILS - ₪</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">BRL - R$</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-500">BDT - ৳</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
