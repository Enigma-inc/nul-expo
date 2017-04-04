@extends('partials.master')

@section('content')
  <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            	
                <!--Map Area-->
            	<div class="col-md-9 col-sm-7 col-xs-12">
                	<div class="map-area" id="map-location"></div>
                </div>
                
                <!--Contact Info-->
                <div class="col-md-3 col-sm-5 col-xs-12">
                	<div class="contact-info">
                    	<h3>Contact</h3>
                    	<div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                    	<ul class="info">
                            <li><strong>Email</strong> <a href="mailto:meeton@email.com">meeton@email.com</a></li>
                            <li><strong>Phone</strong> <a href="#">+49 123 456 789</a></li>
                            <li><strong>Fax</strong> +49 123 456 789</li>
                            <li><strong>Website</strong> <a href="http://www.envato.com">http://www.envato.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--Contact Form Area-->
            <div class="row clearfix">
            	<div class="col-md-9 col-sm-12 col-xs-12 contact-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                		
                        <!--Contact Form-->
                        <form id="contact-form" method="post" action="sendemail.php">
                        	<div class="row clearfix">
                                
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Name</label>
                                        <input type="text" name="username" value="" placeholder="Enter Your Name">
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Email</label>
                                        <input type="email" name="email" value="" placeholder="Enter Your Email Address">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Subject</label>
                                        <input type="text" name="subject" value="" placeholder="Enter a Subject">
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Message</label>
                                        <textarea name="message" placeholder="Type Your Message Here"></textarea>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="form-group text-right">
                                <button type="submit" name="submit-form" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-envelope"></span> Send Message</button>
                            </div>
                            
                        </form>
                        
                    </div>
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