(function($) {

    "use strict";


    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(500).fadeOut(500);
        }
    }

    function enableSlimScroll() {
        $('#welcome-text').slimScroll({
            size: '10px',
            height: '400px',
            railVisible: true,
            alwaysVisible: true,
            color: '#e13f30'
        });
    }

    //Update Header Style + Scroll Top
    function headerStyle() {
        if ($('.main-header').length) {
            var windowpos = $(window).scrollTop();
            if (windowpos >= 1) {
                $('.main-header').addClass('fixed-top-header');
                $('.scroll-to-top').fadeIn(300);
            } else {
                $('.main-header').removeClass('fixed-top-header');
                $('.scroll-to-top').fadeOut(300);
            }
        }
    }


    //Submenu Dropdown Toggle
    if ($('.main-header li.dropdown .submenu').length) {
        $('.main-header li.dropdown').append('<div class="dropdown-btn"></div>');

        //Dropdown Button
        $('.main-header li.dropdown .dropdown-btn').on('click', function() {
            $(this).prev('.submenu').slideToggle(500);
        });
    }


    //Main Slider
    if ($('.main-slider').length) {

        jQuery('.tp-banner').show().revolution({
            delay: 7500,
            startwidth: 1200,
            startheight: 700,
            hideThumbs: 600,

            thumbWidth: 80,
            thumbHeight: 50,
            thumbAmount: 5,

            navigationType: "bullet",
            navigationArrows: "0",
            navigationStyle: "preview4",

            touchenabled: "on",
            onHoverStop: "on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

            keyboardNavigation: "off",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",

            spinner: "spinner4",

            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "off",
            forceFullWidth: "on",

            hideThumbsOnMobile: "on",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "on",
            hideArrowsOnMobile: "on",
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            videoJsPath: "",
            fullScreenOffsetContainer: ".main-slider"
        });


    }


    //Schedule Box Tabs
    if ($('.schedule-box').length) {

        //Tabs
        $('.schedule-box .tab-btn').on('click', function() {
            var target = $($(this).attr('data-id'));
            $('.schedule-box .tab-btn').removeClass('active');
            $(this).addClass('active');
            $('.schedule-box .tab').fadeOut(0);
            $('.schedule-box .tab').removeClass('current');
            $(target).fadeIn(300);
            $(target).addClass('current');
            var windowWidth = $(window).width();
            if (windowWidth <= 700) {
                $('html, body').animate({
                    scrollTop: $('.tabs-box').offset().top
                }, 1000);
            }
        });

        //Accordion
        $('.schedule-box .hour-box .toggle-btn').on('click', function() {
            var target = $($(this).next('.content-box'));
            $(this).toggleClass('active');
            $(target).slideToggle(300);
            $(target).parents('.hour-box').toggleClass('active-box');
        });

    }


    //Countdown Timer
    if ($('#countdown-timer').length) {
        $('#countdown-timer').countdown('2018/01/23', function(event) {
            var $this = $(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%D</span><span class="colon">:</span><br>DAYS</div> ' + '<div class="counter-column"><span class="count">%H</span><span class="colon">:</span><br>HOURS</div>  ' + '<div class="counter-column"><span class="count">%M</span><span class="colon">:</span><br>MINUTES</div>  ' + '<div class="counter-column"><span class="count">%S</span><br>SECOND</div>'));
        });
    }


    //Sponsors Slider
    if ($('.sponsors .slider').length) {
        $('.sponsors .slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 5
                }
            }
        });
    }




    //Team Slider
    if ($('.team-section .slider').length) {
        $('.team-section .slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 5
                }
            }
        });
    }
    // Scroll to top
    if ($('.scroll-to-top').length) {
        $(".scroll-to-top").on('click', function() {
            // animate
            $('html, body').animate({
                scrollTop: $('html, body').offset().top
            }, 1000);

        });
    }

    // gallery filter activation
    function GalleryFilter() {

        if ($('#image-gallery-mix').length) {
            $('.gallery-filter').find('li').each(function() {
                $(this).addClass('filter');
            });
            $('#image-gallery-mix').mixItUp();
        };
        if ($('.gallery-filter.masonary').length) {
            $('.gallery-filter.masonary span').on('click', function() {
                var selector = $(this).parent().attr('data-filter');
                $('.gallery-filter.masonary span').parent().removeClass('active');
                $(this).parent().addClass('active');
                $('#image-gallery-isotope').isotope({ filter: selector });
                return false;
            });
        }
    }

    function galleryLightBox() {
        if ($('#image-gallery-mix').length) {
            $('#image-gallery-mix').find('.fancybox').fancybox();
        };
    }
    // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }


    //TYPE NULISTICE

    function typeNulistice() {
        console.log("TYPING");
        Typed.new('#nulistice', {
            strings: ["<br> NULISTICE-2018 "],
            typeSpeed: 500,
            startDelay: 3000,
            loopCount: 2,
            loop: false,
            showCursor: true,
        });
    }
    /* ==========================================================================
       When document is ready, do
       ========================================================================== */

    $(document).on('ready', function() {
        headerStyle();
        enableSlimScroll();
        typeNulistice();

    });

    /* ==========================================================================
       When document is Scrollig, do
       ========================================================================== */

    $(window).on('scroll', function() {
        headerStyle();
        factCounter();
    });

    /* ==========================================================================
       When document is loading, do
       ========================================================================== */

    $(window).on('load', function() {
        handlePreloader();
    });


})(window.jQuery);