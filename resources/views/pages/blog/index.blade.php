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
    
    });

    </script>

@stop