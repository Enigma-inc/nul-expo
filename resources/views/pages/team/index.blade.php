@extends('partials.master')

@section('content')
  <div class="row">
      <section class="team-section" >
          <div class="auto-container">

              <div class="sec-title">
                  <h2 align="center" class="header">organising Team</h2>
              </div>

              <div class="owl-carousel team">
                  <!--Organising Team-->
                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/maluke_letete.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Maluke Letete</h5>
                              </div>
                          </div>
                      </div>
                  </article>


                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/moeketsi_mpholo.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Moeketsi Mpholo</h5>

                              </div>
                          </div>
                      </div>
                  </article>
                 <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/niklas.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Mr Niklas Hayek</h5>
                              </div>
                          </div>
                      </div>
                  </article>
                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/mosotho_george.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Mosotho George</h5>
                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/pulane_nkhabutlane.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Pulane Nkhabutlane</h5>
                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/puleng_ranthimo.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Puleng Ranthimo</h5>
                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/sissay_mekbib.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Sissay Mekbib</h5>

                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/thimothy_thamae.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Dr Thimothy Thamae</h5>

                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/joseph_thabana.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Mr Joseph Thabana</h5>

                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/retselisitsoe_thamae.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Mr Rets'elisitsoe Thamae</h5>

                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/maleshoane_ramoholi.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Mrs Maleshoane Ramoholi</h5>

                              </div>
                          </div>
                      </div>
                  </article>

                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/himanshu_narayan.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Prof Himanshu Narayan</h5>

                              </div>
                          </div>
                      </div>
                  </article>
                  <article class="team-member" >
                      <div class="inner">
                          <figure class="member-image"><img src="/images/team/kebitsamang_mothibe.jpg" alt="" title=""></figure>
                          <div class="lower">
                              <div class="member-title">
                                  <h5>Mr Kebitsamang Mothibe</h5>

                              </div>
                          </div>
                      </div>
                  </article>

              </div>
          </div>
      </section>
  </div>
   <div id="app">
       <committee></committee>
   </div>

@stop

@section('scripts')
    <script>
    $(document).ready(function(){
    $(".team").owlCarousel({
                margin: 10,
                loop: true,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0:{
                         items: 1,
                    },
                    480:{
                         items: 2,
                    },
                    768:{
                         items: 3,
                    },
                    840:{
                         items: 4,
                    },

                }
    });

        });

    </script>

@stop
