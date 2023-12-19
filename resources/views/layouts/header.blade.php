<header class="flownews-header-wrap">

    <div class="flownews-header-wrap-container header-desktop">



        <div class="flownews-header-top">
            <div class="flownews-wrap-container">

                <div class="flownews-ticker col-sm-7">
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $('.flownews-top-news-ticker').owlCarousel({
                                loop: true,
                                margin: 0,
                                nav: true,
                                lazyLoad: false,
                                dots: false,
                                autoplay: true,
                                smartSpeed: 2000,

                                navText: ['<i class="fa fa-angle-left"></i>',
                                    '<i class="fa fa-angle-right"></i>'
                                ],
                                autoplayTimeout: 3000,
                                responsive: {
                                    0: {
                                        items: 1
                                    }
                                }
                            });
                        });

                    </script>
                    <div class="flownews-top-news-ticker">

                        @foreach($contents as $key => $content)
                        <div class="news-ticker-item">
                            <div class="news-ticker-item-category">
                                <a href="{{ route('category-page', [ $content->category->id, $content->category->name ] ) }}" title="{{ $content->category->name }}">{{ $content->category->name }}</a>
                            </div>
                            <div class="news-ticker-item-title">
                                <a href="{{ route('single-page', $content->id ) }}">{{ $content->title }}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>


                <div class="flownews-social col-sm-3">
                    <div class="flownews-header-top-social">
                        <a href="#facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#vimeo"><i class="fa fa-vimeo"></i></a>
                        <a href="#youtube"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>


                <div class="flownews-date col-sm-2">
                    {{ $now->toFormattedDateString() }}
                </div>

                <div class="flownews-clear"></div>

            </div>
        </div>


        <div class="flownews-header-middle element-no-padding">


            <div class="flownews-wrap-container">

                <div class="flownews-logo flownews-logo-left col-sm-3 bg-black">
                    <a href="{{ route('main-page') }}">
                        <img src="{{ asset('assets/logo/ashgabattimes-logo.png') }}" alt="Logo {{ asset('assets/logo/ashgabattimes-logo.png') }}"></a>
                </div>

                <div class="flownews-banner-top flownews-banner-top-right col-sm-9">
                    <div class="flownews_advertisement_top_banner">
                        <a href="https://www.yupekyoly.com" target="_blank">
                            <img src="{{ asset('assets/logo/yupek-yoly-banner.jpg') }}"
                                alt="{{ asset('assets/logo/yupek-yoly-banner.jpg') }}">
                        </a>
                    </div>
                </div>

                <div class="flownews-clear"></div>
            </div>


        </div>


        <div class="flownews-header-bottom">
            <div class="flownews-header-bottom flownews-wrap-container">



                <div class="flownews-menu col-sm-11">

                    <!-- start:menu desktop -->
                    <nav class="menu-desktop menu-sticky">
                        <ul id="menu-main-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="#{{ __('Categories') }}">{{ __('All Categories') }}</a>


                                <ul class="submenu">
                                    @foreach($categories as $category)
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                        <a href="{{ route('category-page', [ $category->id, $category->name ] ) }}">{{ $category->name }}</a>
                                        @forelse($category->categories as $subcategory)
                                        <ul class="submenu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a
                                                    href="{{ route('category-page', [ $subcategory->id, $subcategory->name ] ) }}">{{ $subcategory->name }}</a>
                                            </li>
                                        </ul>
                                        @empty

                                        @endforelse
                                    </li>
                                    @endforeach

                                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                        <a href="{{ route('favorite-page') }}">Избранный</a>
                                    </li>
                                </ul>
                            </li>

                            @foreach($parentCategories as $key => $parentCategory)
                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="{{ route('category-page', [ $parentCategory->id, $parentCategory->name ] ) }}">{{ $parentCategory->name }}</a>
                            </li>
                            @endforeach

                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="{{ route('favorite-page') }}">Избранный</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end:menu desktop -->
                </div>
                <div class="flownews-search-container col-sm-1">
                    <div class="flownews-search-menu-button">
                        <i class="fa fa-search search-open-form"></i>
                        <i class="fa fa-close search-close-form"></i>
                    </div>
                    <div class="flownews-search">
                        <form action="#search" method="get">
                            <div class="form-group-search">
                                <input type="search" class="search-field" name="s" placeholder="Search...">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="flownews-clear"></div>
            </div>
        </div>



    </div>


    <div class="flownews-header-sticky">
        <div class="flownews-header-bottom flownews-wrap-container">

            <div class="flownews-logo col-sm-2">
                <a href="{{ route('main-page') }}">
                    <img src="{{ asset('assets/logo/ashgabattimes-logo.png') }}" alt="Logo {{ asset('assets/logo/ashgabattimes-logo.png') }}">
                </a>

            </div>
            <div class="flownews-menu col-sm-10">

                <!-- start:menu desktop -->
                <nav class="menu-desktop menu-sticky">
                    <ul id="menu-main-menu-1" class="flownews-menu">
                        @foreach($categories as $category)
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a
                                href="{{ route('category-page', [ $category->id, $category->name ]) }}">{{ $category->name }}</a>
                            @forelse($category->categories as $subcategory)
                            <ul class="submenu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                    <a
                                        href="{{ route('category-page', [ $subcategory->id, $subcategory->name ]) }}">{{ $subcategory->name }}</a>
                                </li>
                            </ul>
                            @empty

                            @endforelse
                        </li>
                        @endforeach

                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="{{ route('favorite-page') }}">Избранный</a>
                        </li>

                    </ul>
                </nav>
                <!-- end:menu desktop -->
            </div>

            <div class="flownews-clear"></div>
        </div>
    </div>


    <div class="flownews-header-wrap-container header-mobile">
        <div class="flownews-logo col-sm-10">
            <a href="{{ route('main-page') }}">
                <img src="{{ asset('news-template/wp-content/uploads/2017/02/LOGO-white.png') }}"
                    alt="{{ asset('news-template/wp-content/uploads/2017/02/LOGO-white.png') }}">
            </a>
        </div>
        <div class="flonews-menu-mobile col-sm-2">

            <!-- start:menu responsive -->
            <div class="menu-responsive-container">
                <div class="open-menu-responsive"><i class="fa fa-navicon"></i></div>
                <div class="close-menu-responsive"><i class="fa fa-remove"></i></div>
                <div class="menu-responsive">
                    <ul id="menu-main-menu-2" class="flownews-menu">
                        @foreach($categories as $key => $category)
                        <li class="mega-menu-carousel menu-item menu-item-type-taxonomy menu-item-object-category">
                            <a
                                href="{{ route('category-page', [ $category->id, $category->name ]) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach

                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="{{ route('favorite-page') }}">Избранный</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end:menu responsive -->
        </div>
        <div class="flownews-clear"></div>
        <div class="flownews-ticker">
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $('.flownews-top-news-ticker').owlCarousel({
                        loop: true,
                        margin: 0,
                        nav: true,
                        lazyLoad: false,
                        dots: false,
                        autoplay: true,
                        smartSpeed: 2000,

                        navText: ['<i class="fa fa-angle-left"></i>',
                            '<i class="fa fa-angle-right"></i>'
                        ],
                        autoplayTimeout: 3000,
                        responsive: {
                            0: {
                                items: 1
                            }
                        }
                    });
                });

            </script>

            <div class="flownews-top-news-ticker">
                @foreach($contents as $key => $content)
                <div class="news-ticker-item">
                    <div class="news-ticker-item-category"><a
                            href="{{ route('category-page', [ $content->category->id, $content->category->name ]) }}"
                            title="{{ $content->category->name }}">{{ $content->category->name }}</a></div>
                    <div class="news-ticker-item-title"><a
                            href="{{ route('single-page', $content->id ) }}">{{ $content->title }}</a></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>
