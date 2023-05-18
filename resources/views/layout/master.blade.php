<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <?php
    if (@Route::current()) {
        if (\Route::current()->getName() == 'index') {
    ?>
            <title>Best Natural Supplements to Boost Libido</title>
            <meta name="description" content="Horny Goat Max by Bulletproof Naturals is one of the best natural supplements to boost libido, to improve stamina, and to increase your strength.">
            <meta name="keywords" content="best natural supplements to boost libido, Live life to the fullest, Live life to the max, Low sex drive, Low sex drive men, Low sex drive in women, Sex drive, Increase sex drive, Dietary Supplement">
            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://bulletproofnaturals.com/">
            <meta property="og:title" content="#1 Dietary Supplement for Low Sex Drive in Men & Women">
            <meta property="og:description" content="Struggling with your sex drive? Bulletproof Naturals offers the #1 dietary supplement to increase sex drive in men & women so you can live life to the fullest.">
            <meta property="og:image" content="https://bulletproofnaturals.com/images/hgmlatest.png">
            <!-- Twitter -->
            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:url" content="https://bulletproofnaturals.com/">
            <meta property="twitter:title" content="#1 Dietary Supplement for Low Sex Drive in Men & Women">
            <meta property="twitter:description" content="Struggling with your sex drive? Bulletproof Naturals offers the #1 dietary supplement to increase sex drive in men & women so you can live life to the fullest.">
            <meta property="twitter:image" content="https://bulletproofnaturals.com/images/hgmlatest.png">
        <?php } elseif (\Route::current()->getName() == 'product.show') { ?>
            <title>Horny Goat Max - Libido Booster</title>
            <meta name="description" content="Horny Goat Max is a natural enhancement supplement with an all-in-one powerful formula that increases your confidence by working as a libido booster.">
            <meta name="keywords" content="horny goat max, libido booster, Low libido, How to increase libido, Increase libido, Supplements for libido, Libido booster, Best supplements for libido">
        <?php
        } elseif (\Route::current()->getName() == 'contact-us') { ?>
            <title>Contact Us - Bulletproof Naturals</title>
            <meta name="description" content="Horny Goat Max by Bulletproof Naturals is one of the best natural supplements to boost libido, to improve stamina, and to increase your strength.">
            <meta name="keywords" content="best natural supplements to boost libido, Live life to the fullest, Live life to the max, Low sex drive, Low sex drive men, Low sex drive in women, Sex drive, Increase sex drive, Dietary Supplement, Sex life, larginine, maca root">

        <?php
        } elseif (\Route::current()->getName() == 'shipping-policy') { ?>
            <title>Shipping Policy - Bulletproof Naturals</title>
            <meta name="description" content="Horny Goat Max by Bulletproof Naturals is one of the best natural supplements to boost libido, to improve stamina, and to increase your strength.">
            <meta name="keywords" content="best natural supplements to boost libido, Live life to the fullest, Live life to the max, Low sex drive, Low sex drive men, Low sex drive in women, Sex drive, Increase sex drive, Dietary Supplement, Sex life, larginine, maca root">

        <?php
        } elseif (\Route::current()->getName() == 'return-policy') { ?>
            <title>Return Policy - Bulletproof Naturals</title>
            <meta name="description" content="Horny Goat Max by Bulletproof Naturals is one of the best natural supplements to boost libido, to improve stamina, and to increase your strength.">
            <meta name="keywords" content="best natural supplements to boost libido, Live life to the fullest, Live life to the max, Low sex drive, Low sex drive men, Low sex drive in women, Sex drive, Increase sex drive, Dietary Supplement, Sex life, larginine, maca root">

        <?php
        } elseif (\Route::current()->getName() == 'privacy-policy') { ?>
            <title>Privacy Policy - Bulletproof Naturals</title>

        <?php
        } elseif (\Route::current()->getName() == 'terms') { ?>
            <title>Terms and Conditions - Bulletproof Naturals</title>
        <?php
        } elseif (\Route::current()->getName() == 'gdpr') { ?>
            <title>GDPR Privacy Policy - Bulletproof Naturalsr</title>
        <?php
        } elseif (\Route::current()->getName() == 'cart.index') { ?>

            <title>Best Natural Supplements to Boost Libido</title>

            <meta name="description" content="Horny Goat Max by Bulletproof Naturals is one of the best natural supplements to boost libido, to improve stamina, and to increase your strength.">
            <meta name="keywords" content="best natural supplements to boost libido, Live life to the fullest, Live life to the max, Low sex drive, Low sex drive men, Low sex drive in women, Sex drive, Increase sex drive, Dietary Supplement, Sex life, larginine, maca root">
        <?php
        }
    } else {
        ?>
        <title>Best Natural Supplements to Boost Libido</title>
        <meta name="description" content="Horny Goat Max by Bulletproof Naturals is one of the best natural supplements to boost libido, to improve stamina, and to increase your strength.">
        <meta name="keywords" content="best natural supplements to boost libido, Live life to the fullest, Live life to the max, Low sex drive, Low sex drive men, Low sex drive in women, Sex drive, Increase sex drive, Dietary Supplement, Sex life, larginine, maca root">
    <?php } ?>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P4L5R2B');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.ico') }}" type="image/png" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <!--Fonts-->
    {{-- <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}"> --}}
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">   --}}
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        .splide__arrow {
            background: #000;
            opacity: .75;
            width: 2.5rem;
            height: 2.5rem;
        }

        .splide__arrow svg {
            fill: #fff;

        }

        .splide__arrow:hover svg {
            fill: #a87c00;
        }

        #dfwid-170854 .dfwid-close svg {
            fill: #ffffff;
        }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158701132-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-158701132-1');
    </script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq)
                return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)
                f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '226841445138275');
        fbq('track', 'PageView');
    </script>
    <?php
    if (@Route::current()) {
        if (\Route::current()->getName() == 'checkout.index') {
    ?>
            <script>
                fbq('track', 'AddPaymentInfo');
                fbq('track', 'AddToCart');
                fbq('track', 'InitiateCheckout');
            </script>
        <?php } elseif (\Route::current()->getName() == 'thanks-for-subscribing') { ?>
            <script>
                fbq('track', 'Lead');
            </script>
    <?php
        }
    }
    ?>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=919040618542849&ev=PageView&noscript=1" alt="Facebook"></noscript>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "bulletproof Naturals",
            "url": "https://bulletproofnaturals.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://bulletproofnaturals.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 641524475 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-641524475"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-641524475');
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-641524475/1f-fCKye-tEDEPvF87EC',
            'transaction_id': ''
        });
    </script>

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4L5R2B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div id="app">

        {{-- @include('partials.header') --}}
        <main class="page-body">
            @yield('content')
        </main>
        {{-- @include('partials.subscribe') --}}
        {{-- @include('partials.footer') --}}

        <!--Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript" ></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
        {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
        <?php if (\Route::current()->getName() == 'index') { ?>
            <script src="{{ asset('js/cookie-popup.js') }}" type="text/javascript"></script>
        <?php } ?>
        <script>
            var _dcq = _dcq || [];
            var _dcs = _dcs || {};
            _dcs.account = '5182951';

            (function() {
                var dc = document.createElement('script');
                dc.type = 'text/javascript';
                dc.async = true;
                dc.src = '//tag.getdrip.com/5182951.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(dc, s);
            })();
        </script>

        {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
        <script>
            "use strict";

            ! function() {
                var t = window.driftt = window.drift = window.driftt || [];
                if (!t.init) {
                    if (t.invoked)
                        return void(window.console && console.error && console.error("Drift snippet included twice."));
                    t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                        t.factory = function(e) {
                            return function() {
                                var n = Array.prototype.slice.call(arguments);
                                return n.unshift(e), t.push(n), t;
                            };
                        }, t.methods.forEach(function(e) {
                            t[e] = t.factory(e);
                        }), t.load = function(t) {
                            var e = 3e5,
                                n = Math.ceil(new Date() / e) * e,
                                o = document.createElement("script");
                            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                            var i = document.getElementsByTagName("script")[0];
                            i.parentNode.insertBefore(o, i);
                        };
                }
            }();
            drift.SNIPPET_VERSION = '0.3.1';
            drift.load('87eky8bx329c');
        </script>
    </div>

</body>

</html>
