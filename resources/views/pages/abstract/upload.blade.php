@extends('partials.master') 
@section('content')
<section>
    <div id="app" class="auto-container">
        <div class="sec-title wow fadeInUp text-center" style="text-align:left" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header">Abstract Submission</h2>
        </div>
        <div class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <abstract-upload csrf-token="{{csrf_token()}}"></abstract-upload>
        </div>


    </div>
</section>
@stop