@extends('partials.master')

@section('content')
    <!--Schedule Section-->
    <section class="schedule-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            
            	<div class="col-md-8 col-sm-12 col-xs-12">
                	<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2>Check our schedule</h2></div>
                </div>
                
                <div class="col-md-4 col-sm-12 col-xs-12 text-right wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                	<a href="http://localhost:8000/public/docs/schedule.pdf" class="download-btn theme-btn"><span class="fa fa-file-pdf-o"></span> DOWNLOAD schedule PDF</a>
                </div>
                
            </div>
            
            <!--Schedule Box-->
            <div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                
                <!--Tab Buttons-->
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn" data-id="#monday"><span class="day">Monday</span><span class="date">22/01/2018</span><span class="curve"></span></li>
                    <li class="tab-btn" data-id="#tuesday"><span class="day">Tuesday</span><span class="date">23/01/2018</span><span class="curve"></span></li>
                    <li class="tab-btn" data-id="#wednesday"><span class="day">Wednesday</span><span class="date">24/01/2018</span><span class="curve"></span></li>
                    <li class="tab-btn" data-id="#thursday"><span class="day">Thursday</span><span class="date">25/01/2018</span><span class="curve"></span></li>
                    <li class="tab-btn" data-id="#friday"><span class="day">Friday</span><span class="date">26/01/2018</span><span class="curve"></span></li>
                </ul>
                
                <!--Tabs Box-->
                <div class="tabs-box">
                    
                    <!--Tab / Current / Monday-->
                    <div class="tab current" id="monday">
                        
                        <div class="hour-box">
                            <div class="hour">08:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Arrival</h3></div>

                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">17:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Pre-Registration</h3></div>
                            
                        </div>                       
                        
                    </div>
                    
                    <!--Tab / Tuesday-->
                    <div class="tab" id="tuesday">
                        
                        <div class="hour-box">
                            <div class="hour">08:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Registration</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">09:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Opening Ceremony</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:00 AM</div>
                            <div class="img-circle circle img-circle-red"><span></span></div>
                            <div class="toggle-btn"><h3>Tea/Break</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:30 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Plenary Lectures</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">11:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Parallel Sessions</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">13:00 PM</div>
                            <div class="img-circle circle img-circle-red"><span></span></div>
                            <div class="toggle-btn"><h3>Lunch</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">14:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Parallel Sessions</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">16:30 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Tea Break/Posters</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">17:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>End of Day</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">19:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Local Music/Dance</h3></div>
                            
                        </div>
                        
                    </div>
                
                    <!--Tab / Wednesday-->
                    <div class="tab" id="wednesday">
                        
                        <div class="hour-box">
                            <div class="hour">08:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Registration</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">09:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Plenary Lectures</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:00 AM</div>
                            <div class="img-circle circle img-circle-red"><span></span></div>
                            <div class="toggle-btn"><h3>Tea/Break</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:30 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Invited Speakers</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">11:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Parallel Sessions</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">13:00 PM</div>
                            <div class="img-circle circle img-circle-red"><span></span></div>
                            <div class="toggle-btn"><h3>Lunch</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">14:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Parallel Sessions</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">16:30 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Tea Break/Posters</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">17:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>End of Day</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">19:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Local Music/Dance</h3></div>
                            
                        </div>
                        
                    </div>
                
                    <!--Tab / Thursday-->
                    <div class="tab" id="thursday">
                        
                        <div class="hour-box">
                            <div class="hour">08:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Registration</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">09:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Plenary Lectures</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:00 AM</div>
                            <div class="img-circle circle img-circle-red"><span></span></div>
                            <div class="toggle-btn"><h3>Tea/Break</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:30 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Invited Speakers</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">11:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Parallel Sessions</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">13:00 PM</div>
                            <div class="img-circle circle img-circle-red"><span></span></div>
                            <div class="toggle-btn"><h3>Lunch</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">14:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Expo at Pioneer Mall</h3></div>
                            
                        </div>

                        <div class="hour-box">
                            <div class="hour">17:00 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>Gala Dinner</h3></div>
                            
                        </div>

                                                
                    </div>
                
                    <!--Tab / Friday-->
                    <div class="tab" id="friday">
                        
                        <div class="hour-box">
                            <div class="hour">08:00 AM</div>
                            <div class="img-circle circle "><span></span></div>
                            <div class="toggle-btn"><h3>Expo Continues at the Mall</h3></div>
                            
                        </div>
                        
                        <div class="hour-box">
                            <div class="hour">10:00 AM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn"><h3>International Visitors' Day Trip</h3></div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                <!--Tabs Box End-->
                
            </div>
            <!--Schedule Box End-->        
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

    </script>

@stop