@extends('partials.master')

@section('content')
<section >
    <div  id="app" class="auto-container">

        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header">Accommodation In Maseru</h2>
            <h6> Data Source: <a href="http://www.servicebox.co.ls/accommodation" target="_blank" style="color: #e13f30">Servicebox</a></h6>
        </div>
       <!-- <div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <p>For a full list of prices please take a look at our table of pricing plans.</p>
        </div>-->


        <div class="row clearfix">

            <accommodation></accommodation>

        </div>

    </div>
</section>
@stop
