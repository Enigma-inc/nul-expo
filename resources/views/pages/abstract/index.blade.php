@extends('partials.master')

@section('content')
    <section>
        <div id="app" class="auto-container">
            <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
                <h2>Abstract Submission Format NULISTICE 2018</h2>
            </div>
            <div>
                    <div class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <p class="text-align-just">
                            <ul >
                                <li>Title  (Font 14 , Times New Romans, bold),</li>
                                <li>Surname and initials of author and co-authors, followed by their respective institution address  (Font 12 , Times New Romans),</li>
                                <li>Abstract (Font 12 (Times New Romans) and word count up to 300,</li>
                                <li>Line space 1.5,</li>
                                <li>Key words: Five, separated by a semi-colon(;) and first letter upper case,</li>
                                <li>Corresponding author: (Font 12, Times New Romans):
                                    <ul class="list">
                                        <li>Identify by * </li>
                                        <li>Email address</li>
                                        <li>Telephone and Fax</li>
                                    </ul>
                                </li>
                            </ul>
                        </p>
                    </div>
            </div>
            <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
                <h3>Article Title; Times New Roman; Size-14; Line Spacing: 1.5 Paragraph Spacing: Above Paragraph-10pt, Below Paragraph-10pt</h3>
                <h4>Authors’ information with their institution and post box</h4>
            </div>

            <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><strong><i>Abstract</i></strong></p>
            <hr>

            <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                An abstract is a brief, comprehensive summary of the contents of the article; it allows readers to survey the contents of an article quickly and, like a title, 
                it enables persons interested in the document to retrieve it from abstracting and indexing databases. Most scholarly journals require an abstract. 
                Consult the instructions to authors or web page of the journal to which you plan to submit your article for any journal-specific instructions. 
                A well-prepared abstract can be the most important single paragraph in an article. Most people have their first contact with an article by seeing just the abstract, 
                usually in comparison with several other abstracts, as they are doing a literature search.
            </p>

            <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                Readers frequently decide on the basis of the abstract whether to read the entire article. The abstract needs to be dense with information. By embedding key words in your abstract, 
                you enhance the user’s ability to find it. Do not exceed the abstract word limit of the journal to which you are submitting your article. Word limits vary from journal to journal and 
                typically range from 250 to 300 words. For information on how abstracts are used to retrieve articles, consult Record Structure for APA Databases or any International Standard journals for information.
            </p>
            <hr>

            <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <strong>Keywords: </strong>
                Upper case; Semi-colon; Paper template; Abstract; Keywords; Introduction
                Corresponding author: Identify by *
                Email address;
                Telephone and Fax
            </p>
            <div class="text-right margin-bottom-10 margin-top-20 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                	<a href="http://localhost:8000/public/docs/abstract.pdf" target="_blank" class="download-btn theme-btn padding-5"><span class="fa fa-file-pdf-o"></span> DOWNLOAD Abstract Guide</a>
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

    </script>

@stop