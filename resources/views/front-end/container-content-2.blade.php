<div class="flownews-container-content">

    <!-- start:sidebar left -->
    <div class="flownews-content col-xs-12 flownews-page">
        <!-- start:page content -->

        <!-- start:loop page -->
        <article id="post-545" class="post-545 page type-page status-publish hentry">

            <!-- Page Features Image -->

            <!-- Page Title -->

            <!-- Page Content -->
            <div class="post-text text-content">
                <div class="text">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">

                                    <script type="text/javascript">
                                        jQuery(document).ready(function ($) {
                                            $('.flownews-vc-element-posts-carousel-1').owlCarousel({
                                                loop: true,
                                                smartSpeed: 2000,
                                                margin: 25,
                                                nav: true,
                                                lazyLoad: false,

                                                dots: true,
                                                autoplay: true,
                                                autoplayTimeout: 2500,
                                                navText: [
                                                    '<i class="fa fa-angle-left"></i>',
                                                    '<i class="fa fa-angle-right"></i>'
                                                ],
                                                responsive: {
                                                    0: {
                                                        items: 1
                                                    },
                                                    600: {
                                                        items: 1
                                                    },
                                                    700: {
                                                        items: 1
                                                    },
                                                    800: {
                                                        items: 2
                                                    },
                                                    900: {
                                                        items: 2
                                                    },
                                                    1000: {
                                                        items: 2
                                                    },
                                                    1200: {
                                                        items: 2
                                                    }

                                                }
                                            });
                                        });

                                    </script>
                                    <div class="wpmp-clear"></div>

                                    <div class="flownews-clear"></div>


                                    <div class="wpmp-clear"></div>

                                    <div class="wpmp-clear"></div>

                                    <div
                                        class="flownews-vc-element-posts  flownews-posts-type5 flownews-vc-posts-1-col flownews-vc-element-posts-6 element-no-padding">
                                        <div class="flownews-vc-element-posts-title-box title-box-6">
                                            <h2>{{ $category_name ?? __('Favorite') }}</h2> 
                                        </div>
                                        <div class="flownews-vc-element-posts-article-container">
                                            @foreach($news as $row)
                                            <article
                                                class="item-posts first-element-posts col-xs-12  vc-element-post-odd">
                                                <div class="article-image col-xs-5">
                                                    <a href="{{ route('single-page', [$row->id, Str::slug($row->title)] ) }}">
                                                        <img class="flownews-vc-thumbs" src="{{ asset($row->image) }}" alt="{{ asset($row->image) }}">
                                                    </a>
                                                </div>
                                                <div class="article-info col-xs-7">
                                                    <div class="article-info-top">
                                                        <h3 class="article-title">
                                                            <a href="{{ route('single-page', [$row->id, Str::slug($row->title)] ) }}">{{ $row->title }}</a>
                                                        </h3>
                                                        <div class="article-data">
                                                            <i class="fa fa-calendar-o"></i>{{ $now->diffForHumans($row->updated_at) }}
                                                        </div>
                                                        <div class="article-comments"><i class="fa fa-eye"></i>{{ $row->view }}</div>

                                                        <div class="article-comments favorite-red
                                                                    @if(Session::get('favorite'))
                                                                        @foreach(Session::get('favorite') as $favorite)
                                                                            @if($favorite == $row->id)
                                                                                text-danger
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                    "
                                                            onclick="addToFavorite({{ $row->id }})">
                                                            <button class="favorite fa fa-heart"></button>
                                                            <span class="favorite-txt">{{ __('Favorite') }}</span>
                                                        </div>

                                                        <div class="flownews-clear"></div>
                                                        <p class="article-excerpt">{!! Str::limit($row->body, 500) !!}<a
                                                                class="article-read-more" href="{{ route('single-page', [$row->id, Str::slug($row->title)] ) }}">
                                                                <i class="fa fa-angle-double-right"></i></a>
                                                        </p>
                                                        <div class="flownews-clear"></div>
                                                    </div>
                                                    <div class="article-info-bottom">
                                                        <div class="article-category"><a href="{{ route('category-page', [ $row->category->id, Str::slug($row->category->name) ] ) }}"
                                                                title="{{ $row->category->name }}">{{ $row->category->name }}</a>
                                                            <a href="{{ route('category-page', [ $row->category->id, Str::slug($row->category->name) ] ) }}"><i class="fa fa-mail-forward"></i></a>
                                                        </div>

                                                        <div class="flownews-clear"></div>
                                                    </div>
                                                </div>
                                            </article>
                                            <div class="flownews-clear"></div>
                                            @endforeach
                                        </div>
                                        <div class="flownews-clear"></div>
                                    </div>


                                    <div class="wpmp-clear">
                                        <div class="d-flex justify-content-center">
                                            <div>
                                                {{ $news->links('layouts.pagination') }}
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>


        </article>
        <!-- end:loop page -->
        <!-- end:page content -->
    </div>


    <!-- end:sidebar left -->

    <div class="clearfix"></div>
</div>
