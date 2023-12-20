<footer class="flownews-footer-wrap">

    <div class="flownews-header-wrap-container">



        <div class="flownews-footer-top">
            <div class="flownews-wrap-container element-no-padding">
                <div class="footer-widget col-xs-4">
                    <div id="widget-contact-2"
                        class="widget widget_contact fnwp-widget flownews_widget flownews_widget_contact">
                        <div class="flownews-widget-contact-image">
                            <img src="http://themes.ad-theme.com/wp/flownews/wp-content/uploads/2017/02/LOGO-white-300x90.png"
                                title="contact Image" alt=""></div>

                        <div class="flownews-widget-contact-address-title">
                            <h4>{{ __('Address') }}</h4>
                        </div>
                        <div class="flownews-widget-contact-address" style="color:white">
                            <i class="fa fa-map-marker"></i> Turkmenistan Aşgabat</div>
                        <div class="flownews-widget-contact-mail" style="color:white">
                            <i class="fa fa-envelope-o"></i> ashgabattimes@sanly.tm</div>
                        <div class="flownews-widget-contact-mail" style="color:white">
                            <i class="fa fa-envelope-o"></i> timesashgabat@gmail.com</div>
                        <div class="flownews-widget-contact-mail" style="color:white">
                            <i class="fa fa-envelope-o"></i> esca656585@gmail.com</div>
                        <div class="flownews-widget-contact-tel-number" style="color:white">
                            <i class="fa fa-phone"></i> +993 62 274754</div>
                        <div class="flownews-widget-contact-cell-number" style="color:white">
                            <i class="fa fa-mobile-phone"></i> +993 65 656585</div>
                        <div class="clearfix"></div>

                    </div>
                </div>
                <div class="footer-widget col-xs-4">
                    <div id="mega-posts-3" class="widget fnwp-widget flownews_widget fnwp_mega_posts">
                        <h3 class="widget-title">Недавний {{ __('News') }}</h3>
                        <div class="mega-posts fnwp-mega-post-widget-2">

                            @foreach($itemHeaders as $itemHeader)
                            <div class="box_post">
                                <div class="container_post ad_one_one">
                                    <div class="img-post fnwp-mega-post-item-0 ad_one_third">
                                        <a href="{{ route('single-page', [$itemHeader->id, Str::slug($itemHeader->title)] ) }}"><img
                                                src="{{ asset($itemHeader->image) }}"
                                                alt="{{ asset($itemHeader->image) }}" width="150px"></a>
                                    </div>
                                    <div class="box-info ad_two_third">
                                        <h4 class="title-post">
                                            <a href="{{ route('single-page', [$itemHeader->id, Str::slug($itemHeader->title)] ) }}"
                                                title="{{ $itemHeader->title }}">{{ $itemHeader->title }}</a>
                                        </h4>
                                        <span class="data"><i
                                                class="fa fa-calendar-o"></i>{{ $itemHeader->updated_at->toFormattedDateString() }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="footer-widget col-xs-4">
                    <div id="mega-posts-3" class="widget fnwp-widget flownews_widget fnwp_mega_posts">
                        <h3 class="widget-title">{{ __('News') }}</h3>
                        <div class="mega-posts fnwp-mega-post-widget-2">

                            @foreach($contents as $key => $content)
                            <div class="box_post">
                                <div class="container_post ad_one_one">
                                    <div class="img-post fnwp-mega-post-item-0 ad_one_third">
                                        <a href="{{ route('single-page', [$content->id, Str::slug($content->title)] ) }}"><img
                                                src="{{ asset($content->image) }}" alt="{{ asset($content->image) }}"
                                                width="150px"></a>
                                    </div>
                                    <div class="box-info ad_two_third">
                                        <h4 class="title-post">
                                            <a href="{{ route('single-page', [$content->id, Str::slug($content->title)] ) }}"
                                                title="{{ $content->title }}">{{ $content->title }}</a>
                                        </h4>
                                        <span class="data"><i
                                                class="fa fa-calendar-o"></i>{{ $content->updated_at->toFormattedDateString() }}</span>
                                    </div>
                                </div>
                            </div>
                            @if($key == 3)
                            @break
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="flownews-clear"></div>
            </div>
        </div>



        <div class="flownews-footer-bottom">
            <div class="flownews-wrap-container">

                <div class="col-xs-4">
                    <div class="flownews-footer-social"><a href="#facebook"><i class="fa fa-facebook"></i></a><a href="#twitter"><i
                                class="fa fa-twitter"></i></a><a href="#google-plus"><i class="fa fa-google-plus"></i></a><a
                            href="#instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#linkedin"><i class="fa fa-linkedin"></i></a><a href="#vimeo"><i class="fa fa-vimeo"></i></a><a
                            href="#youtube"><i class="fa fa-youtube"></i></a></div>
                </div>
                <div class="col-xs-4">
                    <span class="copyright">{{ __('All Rights Reserved') }}</span>
                </div>
                <div class="flownews-clear"></div>
            </div>
        </div>


    </div>

</footer>
