<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="download_date" content="2025-04-15T19:08:04.561Z" />
    <title>@yield('title') | 5XPCMIRACLE</title>
    <meta name="description"
        content="Digital Templates 24 is been in the industry for an extended period of time, achieving the trust of different brands and the undisputed title of the best digital &amp; designing agency.">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="public">
    <meta name="copyright" content="Copyright 2022 © Digital Templates 24.">
    <meta name="language" content="en">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Digital Templates 24">
    <meta name="geo.region" content="US-FL">
    <meta name="geo.placename" content="Florida">
    <meta name="geo.position" content="27.6648° N; 81.5158° W">
    <meta name="ICBM" content="27.6648° N, 81.5158° W">
    <style>
        ._loader {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            background-color: #180646;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        ._loader img {
            width: 250px;
        }
    </style>
    <base href="/">
    <link rel="canonical" href="https://www.designlayeragency.com/">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    <!-- <link href="../assets/css/fontawesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">

    <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-TYD85VSV1M"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style type="text/css">
        @font-face {
            font-family: 'Atlassian Sans';
            font-style: normal;
            font-weight: 400 653;
            font-display: swap;
            src:
                local('AtlassianSans'),
                local('Atlassian Sans Text'),
                url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/AtlassianSans-latin.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304,
                U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <base href="https://www.designlayeragency.com/">
</head>

<body class="home" cz-shortcut-listen="true">
    <div class="_loader" style="display: none;">
        <!-- <img src="assets/images/loaderdla.gif" loading="lazy" /> -->
        <video autoplay="" muted="" id="myVideo">
            <source src="assets/images/animation.mp4" type="video/mp4">
        </video>
    </div>
    
    @include('front.layout.header')
    @include('front.layout.menu')
    @yield('content')
    @include('front.layout.footer')

    

    <script src="{{ asset('front/js/sparkles.js') }}"></script>
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.owl-case-study').owlCarousel({
                loop: true,
                items: 1,
                stagePadding: 130,
                center: true,
                margin: 60,
                dots: false,
                // autoplay:true,
                responsiveClass: true,

                responsive: {
                    0: {
                        items: 1
                    },
                    320: {
                        items: 1,
                        stagePadding: 30,
                        margin: 20,
                        center: false,
                    },
                    414: {
                        items: 1,
                        stagePadding: 30,
                        margin: 20,
                        center: false,
                    },
                    600: {
                        items: 1,
                        stagePadding: 50,
                        margin: 20
                    },
                    1024: {
                        items: 1,
                        stagePadding: 50,
                        margin: 20
                    },
                    1025: {
                        items: 1,
                        stagePadding: 50,
                        margin: 20
                    }
                }
            });
            $('.owl-testimonials').owlCarousel({
                loop: true,
                items: 1,
                center: true,
                margin: 30,
                autoplay: true,
                navText: ["<img src='/assets/images/right-arrow.svg'>",
                    "<img src='/assets/images/left-arrow.svg'>"
                ],
                nav: true,
                // stagePadding: 150,
                dots: false,
                responsiveClass: true,

                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    414: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                    }
                }
            });
            $('.owl-industries').owlCarousel({
                loop: true,
                items: 1,
                margin: 30,
                // autoplay:true,
                navText: ["<img src='/assets/images/left-arrow-abt.svg'>",
                    "<img src='/assets/images/right-arrow-abt.svg'>"
                ],
                nav: true,
                // stagePadding: 150,
                dots: false,
                responsiveClass: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 4,
                    }
                }
            });
            $('.portfolio-slider').owlCarousel({
                loop: true,
                items: 1,
                margin: 30,
                navText: ["<img src='/assets/images/left-arrow-abt.svg'>",
                    "<img src='/assets/images/right-arrow-abt.svg'>"
                ],
                nav: true,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 2,
                    }
                }
            });
            $('.owl-related-blogs').owlCarousel({
                loop: true,
                items: 1,
                margin: 30,
                navText: ["<img src='/assets/images/left-arrow-abt.svg'>",
                    "<img src='/assets/images/right-arrow-abt.svg'>"
                ],
                nav: true,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    }
                }
            });
        });
        jQuery(document).on('click', '.service-tabs-section .nav li a', function(event) {
            event.preventDefault();

            jQuery('html, body').animate({
                scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
            }, 1400);
        });
        $(document).ready(function() {
            $(".service-tabs-section .nav li").click(function() {
                if (!$(this).hasClass('active')) {
                    $(".service-tabs-section .nav li").removeClass("active");
                    $(this).addClass("active");
                }
            });
        });
        $('.toggle-menu').click(function(e) {
            e.preventDefault();
            $('.main-menu-nav').toggleClass('show');
        })
        $('.cancel-btn').click(function(e) {
            e.preventDefault();
            $('.main-menu-nav').toggleClass('show');
        })
    </script>
    <script>
        $('.testimonials-box .readmore').click(function() {
            $(this).parents('.testimonials-box').find('span').fadeIn();
            $(this).fadeOut();
        })
    </script>
    <script>
        var isloading = true;

        function removeLoading() {
            if (isloading) {
                $("head").append(`<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA==" crossorigin="anonymous" referrerpolicy="no-referrer"><\/script>
                    `);

                $('.myLazy').each(function() {
                    $(this).attr("src", $(this).attr('data-src'))
                })
                isloading = false
            }
        }
        $(document).mousemove(removeLoading)
        $(document).on("touchmove", removeLoading)
        setInterval(removeLoading, 15000);
    </script>
    <script type="text/javascript">
        const sparkles = new Sparkles({
            imagesArray: [
                "assets/images/React.svg",
                "assets/images/Vue.svg",
                "assets/images/Angular.svg",
                "assets/images/PHP.svg",
                "assets/images/Laravel.svg",
                "assets/images/Symfony.svg",
                "assets/images/Nest.svg",
                "assets/images/Node.svg",
                "assets/images/Swift.svg",
                "assets/images/Mariadb.svg",
                "assets/images/Postgre.svg",
                "assets/images/AWS.svg",
                "assets/images/Azure.svg",
                "assets/images/Docker.svg",
                "assets/images/Sketch.svg",
                "assets/images/Figma.svg",
                "assets/images/XD.svg",
                "assets/images/PS.svg",
                "assets/images/AI.svg",
            ],
            canvasId: 'canvas',
            numLines: 40000,
            fieldOfView: 15,
            color: '#623EFD',
            timeout: 2500,
            targetCoefficient: 0.010,
            compressionSpeed: 2.8,
        });
        sparkles.init();
    </script>
    <script>
        var vid = document.getElementById("myVideo");
        vid.playbackRate = 4;
    </script>
    <script>
        window.addEventListener('load', function() {
            $("head").append(`<script type="text/javascript" src="assets/js/particle-image.js"><\/script>`);
            $('._loader').fadeOut();
            let options = {
                root: document,
                rootMargin: '0px',
                threshold: 0.5
            }
            var count = 0
            let callback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("clip-animate");
                    }
                });
            };

            let observer = new IntersectionObserver(callback, options);


            let target = document.querySelectorAll('.animate-in-future');

            target.forEach(animateOnIntersection);

            function animateOnIntersection(item, index) {
                observer.observe(item);
            }
        })
    </script> <!--End Footer-->


    <script type="text/javascript">
        var tabsInterval = setInterval(function() {
            if ($('.homepage-sectionsix ul#myTab li.active').next('li').length > 0) {
                $('.homepage-sectionsix ul#myTab li.active').next('li').find('button').click();
            } else {
                $('.homepage-sectionsix ul#myTab li:first-child button').click();
            }
        }, 5000);
    </script>

    <script src="{{ asset('front/js/parallex.js') }}"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
        $(function() {
            $('.continuous-slider--list').each(function(index, item) {
                var $slider = $(item);
                $($slider).append($($($slider).html()))
                var sizeImage = $(item).find('.item:nth-child(1)').outerWidth();
                var items = $slider.children().length;
                var itemswidth = (items * sizeImage);
                var speed = calculateSpeed(400000);
                $slider.css('width', itemswidth);

                var rotating = true;
                var sliderspeed = 0;
                var seeitems = setInterval(rotateSlider, sliderspeed);

                function rotateSlider() {
                    var $first = $($slider).find('li:first');
                    $first.animate({
                        'margin-left': '-' + sizeImage + 'px'
                    }, speed, "linear", function() {
                        $first.remove().css({
                            'margin-left': '0px'
                        });
                        $($slider).find('li:last').after($first);
                    });
                }

                function calculateSpeed(totalAmount) {
                    const width = $(document).width();
                    const inHour = Math.ceil((totalAmount / 22) / 8);
                    const showedDrams = Math.ceil(((width / 500) * 3) * 1000);
                    const inSecond = Math.ceil((inHour / 60) / 60)
                    return showedDrams / inHour * 1000;
                }
            })
        });
    </script>

{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6318b3c554f06e12d8934fe5/1gcc7sfv7';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> --}}

    @stack('scripts')
</body>
