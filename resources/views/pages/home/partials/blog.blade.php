<section>
    <div  id="app" class="auto-container">

        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header">Latest Stories From Our Blog</h2>
            <h6> Source: <a href="http://www.nulresearchandinnovations.co.ls/blog" target="_blank" style="color: #e13f30">NUL Research & Innovations Blog</a></h6>
        </div>
       <!-- <div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <p>For a full list of prices please take a look at our table of pricing plans.</p>
        </div>-->


        <div class="row clearfix">

            <!--Table Column-->
            <blog-brief></blog-brief>
            @if (session('flash'))
                <flash-message title="Error!" type="error" message="{{ session('flash') }}"></flash-message>
            @endif
        </div>

    </div>
</section>


