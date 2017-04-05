@extends('partials.master')

@section('content')
<section class="price-plans">
    <div class="auto-container">

        <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2>Fee structure for conference registration</h2>
        </div>
        <div class="fees-container">
           <div class="fees-header">Category</div>
           <div class="fees-header">Regular Amounts</div>
           <div class="fees-header">Student Amounts</div>
        </div>
         <div class="fees-container">
           <div class="fees-body">International </div>
           <div class="fees-body">USD <span>650</span></div>
           <div class="fees-body">USD <span>250</span></div>
        </div>
         <div class="fees-container">
           <div class="fees-body">Regional </div>
           <div class="fees-body">USD <span>450</span></div>
           <div class="fees-body">USD <span>250</span></div>
        </div>
         <div class="fees-container">
           <div class="fees-body">Local </div>
           <div class="fees-body">LSL <span>1500</span></div>
           <div class="fees-body">LSL <span>750</span></div>
        </div>
         <div class="fees-container">
           <div class="fees-body">NUL </div>
           <div class="fees-body">LSL <span>500</span></div>
           <div class="fees-body">FREE </div>
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

