<div class="flownews-posts-content-wrap flownews-post-layout1" style="background-image:url({{ asset($news->image) }})">
    <div class="flownews-wrap-container">
        <article class="item-header col-xs-12">
            <div class="article-info">
                <div class="article-info-top">
                    <h2 class="article-title">{{ $news->title }}</h2>
                    <div class="flownews-clear"></div>
                </div>
                <div class="article-info-bottom">
                    <div class="article-data"><i
                            class="fa fa-calendar-o"></i>{{ $news->updated_at->toFormattedDateString() }}</div>
                    <div class="article-separator">|</div>
                    <div class="article-comments"><i class="fa fa-eye"></i>{{ $news->view }}</div>
                    <div class="article-separator">|</div>
                    <!--- Favorite --->
                    <div class="article-comments favorite-red
                                @if(Session::get('favorite'))
                                    @foreach(Session::get('favorite') as $favorite)
                                        @if($favorite == $news->id)
                                            text-danger
                                        @endif
                                    @endforeach
                                @endif
                                "
                        onclick="addToFavorite({{ $news->id }})">
                        <button class="favorite fa fa-heart"></button>
                        <span class="favorite-txt">Избранный</span>
                    </div>
                    <!--- Favorite --->
                    <div class="article-separator">|</div>

                    <div class="article-features-category"><i class="fa fa-ticket"></i><a
                            href="{{ route('category-page', [ $news->category_id, $news->category->name ] ) }}"
                            title="{{ $news->category->name }}">{{ $news->category->name }}</a></div>
                    <div class="flownews-clear"></div>

                </div>
            </div>

        </article>
    </div>
    <div class="header-pattern"></div>
</div>

<section class="flownews-container flownews-wrap-container flownews-post flownews-sidebar-right element-no-padding">




    <div class="flownews-container-content">


        <!-- start:sidebar left -->
        <div class="flownews-content col-xs-9 ">
            <!-- start:page content -->

            <!-- start:loop post -->
            <article id="post-406"
                class="post-406 post type-post status-publish format-image has-post-thumbnail hentry category-animals tag-dolphin tag-ocean post_format-post-format-image">


                <div class="post-text text-content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>{!! $news->body !!}</p>

                                        </div>
                                    </div>

                                    <!--- Favorite --->
                                    <span class="article-comments favorite-red
                                                @if(Session::get('favorite'))
                                                    @foreach(Session::get('favorite') as $favorite)
                                                        @if($favorite == $news->id)
                                                            text-danger
                                                        @endif
                                                    @endforeach
                                                @endif
                                                "
                                        onclick="addToFavorite({{ $news->id }})">
                                        <button class="favorite fa fa-heart"></button>
                                        <span class="favorite-txt">Избранный</span>
                                    </span>
                                    <!--- Favorite --->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <br>

                <div class="navigation-post">


                @if($prevNews)
                    <div class="prev-post">
                        <img width="60" height="60"
                            src="{{ asset($prevNews->image) }}"
                            class="attachment-60x60 size-60x60 wp-post-image" alt="{{ asset($prevNews->image) }}"
                            srcset="{{ asset($prevNews->image) }}"
                            sizes="(max-width: 60px) 100vw, 60px" />
                        <a href="{{ route('single-page', $prevNews->id ) }}" class="prev">
                            <span class="prev-post-text"><i class="fa  fa-angle-left"></i> Предыдущий {{ __('News') }}</span>
                            <span class="name-post">{{ $prevNews->title }}</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                @endif



                @if($nextNews)
                    <div class="next-post">
                        <a href="{{ route('single-page', $nextNews->id ) }}" class="next">
                            <span class="next-post-text">Следующий {{ __('News') }}<i class="fa  fa-angle-right"></i></span>
                            <span class="name-post">{{ $nextNews->title }}</span>
                        </a>
                        <img width="60" height="60"
                            src="{{ asset($nextNews->image) }}"
                            class="attachment-60x60 size-60x60 wp-post-image" alt="{{ asset($nextNews->image) }}"
                            srcset="{{ asset($nextNews->image) }}"
                            sizes="(max-width: 60px) 100vw, 60px" />
                        <div class="clearfix"></div>
                    </div>
                @endif

                    <div class="clearfix"></div>

                </div>


                <div class="clearfix"></div>

            </article>
            <!-- end:loop post -->
            <!-- end:page content -->
        </div>

        <div class="flownews-sidebar col-xs-3" data-sticky_column>
            <div id="mega-posts-2" class="widget fnwp-widget flownews_widget fnwp_mega_posts">
                <h3 class="widget-title"><span class="fnwp-title-widget">Последние {{ __('News') }}</span></h3>
                <div class="mega-posts fnwp-mega-post-widget-1">

                    @foreach($itemHeaders as $itemHeader)
                    <div class="box_post">
                        <div class="container_post ad_one_one">
                            <div class="img-post fnwp-mega-post-item-0 ad_one_third">
                                <a href="{{ route('single-page', $itemHeader->id ) }}">
                                    <img src="{{ asset($itemHeader->image) }}"
                                        alt="{{ asset($itemHeader->image) }}"></a>
                            </div>
                            <div class="box-info ad_two_third">
                                <h4 class="title-post">
                                    <a href="{{ route('single-page', $itemHeader->id ) }}"
                                        title="{{ $itemHeader->title }}">{{ $itemHeader->title }}</a>
                                </h4>
                                <span class="data"><i
                                        class="fa fa-calendar-o"></i>{{ $now->diffForHumans($itemHeader->updated_at) }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $('.fnwp-box-slider-widget-1').owlCarousel({
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        speed: 2000,
                        smartSpeed: 2000,
                        navText: ['<i class="fa fa-angle-left"></i>',
                            '<i class="fa fa-angle-right"></i>'
                        ],
                        responsive: {
                            0: {
                                items: 1
                            }

                        }
                    });
                });

            </script>

            <div id="slider-posts-3" class="widget fnwp-widget flownews_widget fnwp_slider_posts">
                <h3 class="widget-title"><span class="fnwp-title-widget">{{ __('Popular') }} {{ __('News') }}</span>
                </h3>
                <div class="box_slider owl-carousel fnwp-box-slider-widget-1">

                    @foreach($contents as $content)
                    <div class="ad_one_one">
                        <div class="slider-posts-item fnwp-slider-posts-item-0 ad_one_one ad_last big-post sixth item">
                            <a href=""><img src="{{ asset($content->image) }}" alt="{{ asset($content->image) }}"></a>
                            <div class="box-text">
                                <div class="box-padding">
                                    <h3 class="title-post">
                                        <a href="{{ route('single-page', $content->id ) }}"
                                            title="{{ $content->title }}">{{ $content->title }}</a>
                                    </h3>
                                    <div class="category"><a
                                            href="{{ route('category-page', [ $content->category_id, $content->category->name ]) }}"
                                            title="View all posts in Food">{{ $content->category->name }}</a></div>
                                    <span class="data"><i
                                            class="fa fa-calendar-o"></i>{{ $now->diffForHumans($content->updated_at) }}</span>
                                </div>
                            </div>
                            <div class="slider-pattern"></div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div id="widget-fnwp_social-3" class="widget widget_fnwp_social fnwp-widget flownews_widget fnwp_social">
                <h3 class="widget-title"><span class="fnwp-title-widget">Социальные сети</span></h3>
                <div class="box_social ad_one_one flownews-widget-social-style2">
                    <div class="box-icon-social col-xs-2 facebook"><a href="#facebook" class="fa fa-facebook"></a>
                    </div>
                    <div class="box-icon-social col-xs-2 twitter"><a href="#twitter" class="fa fa-twitter"></a></div>
                    <div class="box-icon-social col-xs-2 google-plus"><a href="#google-plus"
                            class="fa fa-google-plus"></a></div>
                    <div class="box-icon-social col-xs-2 pinterest"><a href="#pinterest" class="fa fa-pinterest"></a>
                    </div>
                    <div class="box-icon-social col-xs-2 flickr"><a href="#flickr" class="fa fa-flickr"></a></div>
                    <div class="box-icon-social col-xs-2 instagram"><a href="#instagram" class="fa fa-instagram"></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end:sidebar left -->


        <div class="clearfix"></div>
    </div>
</section>
