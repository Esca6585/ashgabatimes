<!doctype html>
<html class="no-js" lang="en-US">

<head>

    <!-- start:global -->
    <meta charset="UTF-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"><![endif]-->
    <!-- end:global -->

    <!-- start:responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end:responsive web design -->

    <!-- start:head info -->
    <link rel="shortcut icon" href="{{ asset('assets/logo/ashgabattimes-logo-white-icon.png') }}">

    <!-- end:head info -->

    <!-- start:wp_head -->
    <title>@yield('title')</title>
    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if (typeof WebFontConfig === "undefined") {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {
            families: ['Roboto+Condensed:300,400,700,300italic,400italic,700italic',
                'Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic&subset=latin'
            ]
        };

        (function () {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();

    </script>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/themes.ad-theme.com\/wp\/flownews\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.3"
            }
        };
        ! function (a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([
                            55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128,
                            56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]), !b);
                    case "emoji":
                        return b = d([55357, 56692, 8205, 9792, 65039], [55357, 56692, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports
                .everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports
                    .everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c
                .readyCallback = function () {
                    c.DOMReady = !0
                }, c.supports.everything || (h = function () {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load",
                    h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                    "complete" === b.readyState && c.readyCallback()
                })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji),
                    f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);

    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('news-template/wp-content/themes/flownews/assets/css/font-awesome.min.css') }}">

    <link rel='stylesheet' id='fastcarousel-main-style-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='fonts-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/fonts.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='fastgallery-main-style-css'
        href="{{ asset('news-template/wp-content/plugins/fastgallery/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='photobox-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/photobox.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='photoboxie-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/photobox.ie.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='photobox-style-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/photobox-style.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='prettyPhoto-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/prettyPhoto.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href="{{ asset('news-template/wp-content/plugins/fastcarousel/css/magnific-popup.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='fotorama-css-css'
        href="{{ asset('news-template/wp-content/plugins/fastgallery/css/fotorama.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='fastgallery-vc-main-style-css'
        href="{{ asset('news-template/wp-content/plugins/fastgallery_vc/assets/css/style.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='fastmediagallery-vc-main-style-css'
        href="{{ asset('news-template/wp-content/plugins/fastmediagallery/assets/css/style.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='switcher-style-css'
        href="{{ asset('news-template/wp-content/plugins/switcher/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/bootstrap.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flownews-dynamic-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/dynamic.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flownews-style-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/style.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flownews-fonts-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/fonts.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flownews-carousel-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/owl.carousel.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='redux-google-fonts-css'
        href='//fonts.googleapis.com/css?family=Roboto+Condensed%3A400%7CLato%3A400&#038;subset=latin' type='text/css'
        media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href="{{ asset('news-template/wp-content/plugins/js_composer/assets/css/js_composer.min.css') }}"
        type='text/css' media='all' />
    <script type='text/javascript' src="{{ asset('news-template/wp-includes/js/jquery/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('news-template/wp-includes/js/jquery/jquery-migrate.min.js') }}">
    </script>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1488198640753 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1488198640753 {
            margin-bottom: 50px !important;
        }

    </style>
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }

        </style>
    </noscript>
    <!-- end:wp_head -->

    <style>
        .favorite {
            border: none;
            background: none;
        }

        .favorite-red:hover {
            color: red;
            text-color: red;
            cursor: pointer;
        }
    </style>

</head>

<body
    class="home page-template-default page page-id-545 flownews-fullwidth wpb-js-composer js-comp-ver-5.0.1 vc_responsive">

    <!-- start:outer wrap -->
    <div id="flownews-outer-wrap">

        <!-- start:header content -->

        @include('layouts.header')
        <!-- end:header content -->

        @yield('single-news')

        <!-- start:page section -->
        <section class="flownews-container flownews-wrap-container flownews-page  flownews-sidebar-right element-no-padding">

            @yield('item-header')

            @yield('container-content')
        </section>
        <!-- end:page section -->



        <!-- start:wp_footer -->
        @yield('footer')
        <!-- end:wp_footer -->

    </div>
    <!-- end:outer wrap -->

    <!-- start:footer text -->
    <span class="backtotop"><i class="fa fa-angle-up"></i></span>
    <!-- end:footer text -->

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.style-toggle.open').click(function () {
                $("img.demos-image").lazyload({
                    bind: "event",
                    delay: 0,
                    skip_invisible: false,
                    threshold: 400
                });
            });
        });

    </script>


    <link rel='stylesheet' id='flownews-vc-element-posts-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/vc_element_posts.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flownews-vc-element-posts-carousel-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/vc_element_posts_carousel.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='flownews-custom-css-css'
        href="{{ asset('news-template/wp-content/themes/flownews/assets/css/vc_element_posts_tab.css') }}"
        type='text/css' media='all' />
    <style id='flownews-custom-css-inline-css' type='text/css'>
        .news-ticker-item .news-ticker-item-title {
            width: 75%;
        }

    </style>
    <script type='text/javascript' src="{{ asset('news-template/wp-includes/js/imagesloaded.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('news-template/wp-includes/js/masonry.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('news-template/wp-includes/js/jquery/jquery.masonry.min.js') }}"'></script>
    <script type=' text/javascript' src="{{ asset('news-template/wp-content/plugins/fastcarousel/js/frontend.js') }}">
    </script>
    <script type='text/javascript' src="{{ asset('news-template/wp-content/plugins/fastgallery/js/frontend.js') }}">
    </script>
    <script type='text/javascript' src="{{ asset('news-template/wp-content/plugins/fastcarousel/js/photobox.js') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('news-template/wp-content/plugins/fastcarousel/js/jquery.prettyPhoto.js') }}"></script>
    <script type='text/javascript'
        src="{{ asset('news-template/wp-content/plugins/fastcarousel/js/jquery.magnific-popup.js') }}"></script>
    <script type='text/javascript' src="{{ asset('news-template/wp-content/plugins/fastgallery/js/fotorama.js') }}">
    </script>
    <script type='text/javascript' src="{{ asset('news-template/wp-content/plugins/switcher/script.js') }}"></script>

    <script type='text/javascript' src="{{ asset('news-template/wp-content/themes/flownews/assets/js/main.js') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('news-template/wp-content/themes/flownews/assets/js/owl.carousel.js') }}"></script>
    <script type='text/javascript'>
        jQuery(document).ready(function ($) {
            $('.related-item-container').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 2000,
                speed: 2000,
                smartSpeed: 2000,

                navText: ['<i class="flownewsicon fa-angle-left"></i>',
                    '<i class="flownewsicon fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    }
                }
            });
        });

    </script>
    <script type='text/javascript' src="{{ asset('news-template/wp-includes/js/wp-embed.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('news-template/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js') }}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
        </script>
    <script type='text/javascript' src="{{ asset('news-template/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('metronic-template/v7/assets/js/ajax/jquery-3.6.0.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('metronic-template/v7/assets/js/ajax/addToFavoritet.js') }}"></script>

</body>

</html>
