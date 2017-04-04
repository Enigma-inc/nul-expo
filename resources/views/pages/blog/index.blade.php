@extends('partials.master')

@section('content')
  <section >
    <div  id="app" class="auto-container">

        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2>Our Blog</h2>
            <h6> Source: <a href="http://www.nulresearchandinnovations.co.ls/blog" target="_blank" style="color: #e13f30"><i>NUL Research & Innovations</i></a></h6>
        </div>
       <!-- <div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <p>For a full list of prices please take a look at our table of pricing plans.</p>
        </div>-->


        <div class="row clearfix">

            <!--Table Column-->
            <blog></blog>

        </div>

    </div>
</section>
@stop

@section('scripts')
    <script> 
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
                margin: 10,
                loop: true,
                autoWidth: false,
                items: 5,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
    });

    $('.tp-banner').show().revolution({
                delay: 7500,
                startwidth: 1000,
                startheight: 488,
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
    });

    $('#countdown-timer').countdown('2018/01/13', function(event) {
			var $this = $(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%D</span><span class="colon">:</span><br>DAYS</div> ' + '<div class="counter-column"><span class="count">%H</span><span class="colon">:</span><br>HOURS</div>  ' + '<div class="counter-column"><span class="count">%M</span><span class="colon">:</span><br>MINUTES</div>  ' + '<div class="counter-column"><span class="count">%S</span><br>SECOND</div>'));
		});

    </script>

@stop