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
            <div class="accordion" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Browse Categories
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="accordion" id="categoryAccordion">
                                @foreach ($categories as $category)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="category{{ $category->id }}Heading">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#category{{ $category->id }}Collapse"
                                                aria-expanded="false"
                                                aria-controls="category{{ $category->id }}Collapse">
                                                {{ $category->name }}
                                            </button>
                                        </h2>
                                        <div id="category{{ $category->id }}Collapse"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="category{{ $category->id }}Heading"
                                            data-bs-parent="#categoryAccordion">
                                            @foreach ($category->subCategories as $subCategory)
                                                <div class="accordion-body">
                                                    {{ $subCategory->name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="exploreAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="exploreHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#exploreCollapse" aria-expanded="false" aria-controls="exploreCollapse">
                            Explore
                        </button>
                    </h2>
                    <div id="exploreCollapse" class="accordion-collapse collapse" aria-labelledby="exploreHeading"
                        data-bs-parent="#exploreAccordion">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="businessAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="businessHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#businessCollapse" aria-expanded="false"
                            aria-controls="businessCollapse">
                            Business solutions
                        </button>
                    </h2>
                    <div id="businessCollapse" class="accordion-collapse collapse" aria-labelledby="businessHeading"
                        data-bs-parent="#businessAccordion">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link fw-500">Fiverr Pro</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fw-500">Fiverr Certified</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fw-500">Fiverr Enterprise</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="accordion" id="langAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="langHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#langCollapse" aria-expanded="false" aria-controls="langCollapse">
                            <span>English<i class="fa-solid fa-globe ms-2"></i></span>
                        </button>
                    </h2>
                    <div id="langCollapse" class="accordion-collapse collapse" aria-labelledby="langHeading"
                        data-bs-parent="#langAccordion">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="currencyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="currencyHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#currencyCollapse" aria-expanded="false"
                            aria-controls="currencyCollapse">
                            $ USD
                        </button>
                    </h2>
                    <div id="currencyCollapse" class="accordion-collapse collapse" aria-labelledby="currencyHeading"
                        data-bs-parent="#currencyAccordion">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
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
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>
