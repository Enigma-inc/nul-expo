@extends('partials.master')

@section('content')
      <div class="container">
      <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2>Accomodation</h2>
            <h6> Source: <a href="http://www.servicebox.co.ls/" target="_blank" style="color: #e13f30"><i>Service Box</i></a></h6>
        </div>
          <iframe class="sb margin-bottom-10" height="700" src="http://www.servicebox.co.ls/accommodation" style="width: 100%; float: left; border: 0;" width="300"></iframe>
      </div>
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