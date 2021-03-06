@extends('partials.master')

@section('content')
    <div class="preloader"></div>
    @include('pages.home.partials.slider')
    {{-- <div class="application-deadline-home">
         @include('pages.expo-exhibition.deadline')
    </div> --}}
    @include('pages.home.partials.about')
    @include('pages.home.partials.importantdates')
    @include('pages.home.partials.topics')
    @include('pages.home.partials.fees')
    {{-- @include('pages.home.partials.team') --}}
<div id="app">

    {{-- @include('pages.home.partials.scientific-committee') --}}
    {{-- @include('pages.home.partials.blog') --}}
</div>

@stop


@section('scripts')
    <script>
    $(document).ready(function(){
    $(".team").owlCarousel({
                margin: 10,
                loop: true,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0:{
                         items: 1,
                    },
                    480:{
                         items: 2,
                    },
                    768:{
                         items: 3,
                    },
                    840:{
                         items: 4,
                    },

                }
    });

    // $('.tp-banner').show().revolution({
    //             delay: 7500,
    //             startwidth: 1000,
    //             startheight: 488,
    //             hideThumbs: 600,
    //
    //             thumbWidth: 80,
    //             thumbHeight: 50,
    //             thumbAmount: 5,
    //
    //             navigationType: "bullet",
    //             navigationArrows: "0",
    //             navigationStyle: "preview4",
    //
    //             touchenabled: "on",
    //             onHoverStop: "on",
    //
    //             swipe_velocity: 0.7,
    //             swipe_min_touches: 1,
    //             swipe_max_touches: 1,
    //             drag_block_vertical: false,
    //
    //             parallax: "mouse",
    //             parallaxBgFreeze: "on",
    //             parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
    //
    //             keyboardNavigation: "off",
    //
    //             navigationHAlign: "center",
    //             navigationVAlign: "bottom",
    //             navigationHOffset: 0,
    //             navigationVOffset: 20,
    //
    //             soloArrowLeftHalign: "left",
    //             soloArrowLeftValign: "center",
    //             soloArrowLeftHOffset: 20,
    //             soloArrowLeftVOffset: 0,
    //
    //             soloArrowRightHalign: "right",
    //             soloArrowRightValign: "center",
    //             soloArrowRightHOffset: 20,
    //             soloArrowRightVOffset: 0,
    //
    //             shadow: 0,
    //             fullWidth: "on",
    //             fullScreen: "off",
    //
    //             spinner: "spinner4",
    //
    //             stopLoop: "off",
    //             stopAfterLoops: -1,
    //             stopAtSlide: -1,
    //
    //             shuffle: "off",
    //
    //             autoHeight: "off",
    //             forceFullWidth: "on",
    //
    //             hideThumbsOnMobile: "on",
    //             hideNavDelayOnMobile: 1500,
    //             hideBulletsOnMobile: "on",
    //             hideArrowsOnMobile: "on",
    //             hideThumbsUnderResolution: 0,
    //
    //             hideSliderAtLimit: 0,
    //             hideCaptionAtLimit: 0,
    //             hideAllCaptionAtLilmit: 0,
    //             startWithSlide: 0,
    //             videoJsPath: "",
    //             fullScreenOffsetContainer: ".main-slider"
    //         });
    // });

    $('#countdown-timer').countdown('2018/01/13', function(event) {
			var $this = $(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%D</span><span class="colon">:</span><br>DAYS</div> ' + '<div class="counter-column"><span class="count">%H</span><span class="colon">:</span><br>HOURS</div>  ' + '<div class="counter-column"><span class="count">%M</span><span class="colon">:</span><br>MINUTES</div>  ' + '<div class="counter-column"><span class="count">%S</span><br>SECOND</div>'));
		});

    </script>

@stop
