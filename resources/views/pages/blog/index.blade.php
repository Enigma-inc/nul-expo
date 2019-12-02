@extends('partials.master')

@section('content')
<section>
    <div class="page-title">
        <h1>Our Blog</h1>
    </div>
</section>
<section class="padding-20">
    <div  id="app" class="auto-container">

        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h6> Source: <a href="http://www.nulresearchandinnovations.co.ls/blog" target="_blank" style="color: #e13f30">NUL Research & Innovations Blog</a></h6>
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
