<div class="w-100 border-top border-bottom">
    <div class="container">
        <ul class="navbar-nav flex-row gap-1 d-none d-lg-flex">
            @foreach ($categories as $category)
                <li class="nav-item hover-dropdown-wrapper">
                    <a href="{{ route('categories.show', ['category' => $category->key]) }}"
                        class="hover-dropdown-btn nav-link fw-500">{{ $category->name }}</a>
                    <div class="{{ $category->class }}">
                        @foreach ($category->subCategories as $subCategory)
                            <ul class="col-3 mb-3">
                                <li class="dorpdown-item fw-bold mb-2">{{ $subCategory->name }}</li>
                                @foreach ($subCategory->subSubCategories as $subSubCategory)
                                    <li class="dorpdown-item fw-500">
                                        <a href="{{ route('gigs.subSubCategory', ['subSubCategoryId' => $subSubCategory->id]) }}"
                                            class="nav-link px-0">{{ $subSubCategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
