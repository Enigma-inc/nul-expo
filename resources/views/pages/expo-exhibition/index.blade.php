@extends('partials.master')
@section('content')
  <section class="padding-20">
      <div class="auto-container">
          <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
              <h2 class="header">Expo and Exhibition</h2>
          </div>
          <div class="row clearfix">
              <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <div class="row margin-left-10">
                    <h3 class="header color-primary">Expo</h3><hr class="margin-5">
                  </div>
                  <div id='expo-setup' class="pull-left" >
                      <a href="{{asset('images/conference/expo-setup-lg.jpg')}}" >
                          <img  src="{{asset('images/conference/expo-setup-sm.jpg')}}"
                              title="Expo Stalls Arrangement " class="img-responsive  margin-10 conference-img-lg" style="position: relative;z-index: 10;">
                      </a>
                      <span class="color-primary col-xs-12 text-center">
                        <em>Click on image to enlarge</em>
                      </span>
                  </div>
                  <div class="">

                  </div>

                  <p class="text-align-just">
                      Under this category, we are expecting more than 300 innovators to showcase their innovative products and small businesses. Anyone can apply to this category and the fee charged is only M360.00 for four days from January 23 to January 26. The only limit is that businesses should display only products they produce first-hand, not those that they buy and sell. This category is normally an amazing way to show the potential that young people and small businesses have in terms of innovation and entrepreneurship. It also allows businesses to network and find potential investors.
                  </p>

                  <p class="text-align-just">
                    Innovators in this category form part of the innovation market which will be held under tents on the grounds of ‘Manthabiseng Convention Centre. Tables,
                    chairs and poster stands are provided for display. Applicants are encouraged to have posters. However, details on poster dimensions will be provided soon.
                  </p>

                  <p class="text-align-just">
                      To join, register and write a brief summary of your product/business in less than 100 words. Payment details will be provided later. The National University of Lesotho (NUL) teachers, students and graduates MAY be subsidized
                      or have their costs covered in full, depending on the available funding.
                  </p>
              </div>
              <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <div class="row margin-left-10">
                    <h3 class="header color-primary">Exhibition</h3><hr class="margin-5">
                  </div>
                  <div id='exhibition-setup' class="pull-left" >
                      <a href="{{asset('images/conference/exhibition-setup-lg.jpg')}}" >
                          <img  src="{{asset('images/conference/exhibition-setup-sm.jpg')}}"
                              title="Customised Stalls Arrangement " class="img-responsive  margin-10 conference-img-lg" style="position: relative;z-index: 10;">
                      </a>
                      <span class="color-primary col-xs-12 text-center">
                        <em>Click on image to enlarge</em>
                      </span>
                  </div>
                  <p class="text-align-just">
                    This category is meant for medium-scale to large businesses both locally and internationally. It forms part of the NULISTICE and RERIS conferences and it will be held within the foyer of the
                    ‘Manthabiseng Convention Centre. However, it will be open to the public.
                  </p>

                  <p class="text-align-just">
                  In the category, effort has been made to provide a classy display of businesses and
                  the products they sell to the members of the public. Businesses will have a chance to choose between different OPTIONS which better suit their taste as detailed below.
                 </p>

                  <p class="text-align-just col-md-12">
                      <b><em>
                        To apply please choose your preferred option and register your
                          business under that option. Payment details will be provided in due time.
                      </em>
                        </b>
                  </p>
              </div>

          </div>
          <div class="row">
            <div class="wow fadeInUp row" data-wow-delay="200ms" data-wow-duration="1500ms">
              <div class="panel-group exhibition-options" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                          Select Your Preferred Option</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="col-xs-12 col-sm-6 col-md-4 margin-top-10">
                            <div class="col-xs-12 card padding-0">
                              <div class="option ">
                                <a href="{{asset('images/conference/option-a-lg.jpg')}}">
                                  <div class="header margin-10">
                                    Option A
                                  </div>
                                    <img  src="{{asset('images/conference/option-a-sm.jpg')}}"
                                        title="Option A: M37,000.00" class="img-responsive conference-img-lg image" >
                                        <span class="color-primary col-xs-12 text-center">
                                          <em>Click on image to enlarge</em>
                                        </span>
                                </a>
                              </div>
                              <div class="footer">
                                 <a class="col-xs-12 btn btn-primary" href="htt://www.enigma.co.ls" >
                                   Register
                                 </a>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-4 margin-top-10">
                            <div class="col-xs-12 card padding-0">
                              <div class="option ">
                                <a href="{{asset('images/conference/option-b-lg.jpg')}}">
                                  <div class="header margin-10">
                                    Option B
                                  </div>
                                    <img  src="{{asset('images/conference/option-b-sm.jpg')}}"
                                        title="Option B: M42,000.00" class="img-responsive conference-img-lg image" >
                                        <span class="color-primary col-xs-12 text-center">
                                          <em>Click on image to enlarge</em>
                                        </span>
                                </a>
                              </div>
                              <div class="footer">
                                 <a class="col-xs-12 btn btn-primary" href="htt://www.enigma.co.ls" >
                                   Register
                                 </a>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-4 margin-top-10">
                            <div class="col-xs-12 card padding-0">
                              <div class="option ">
                                <a href="{{asset('images/conference/option-c-lg.jpg')}}">
                                  <div class="header margin-10">
                                    Option C
                                  </div>
                                    <img  src="{{asset('images/conference/option-c-sm.jpg')}}"
                                        title="Option C: M49,000.00" class="img-responsive conference-img-lg image" >
                                        <span class="color-primary col-xs-12 text-center">
                                          <em>Click on image to enlarge</em>
                                        </span>
                                </a>
                              </div>
                              <div class="footer">
                                 <a class="col-xs-12 btn btn-primary" href="htt://www.enigma.co.ls" >
                                   Register
                                 </a>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-4 margin-top-10">
                            <div class="col-xs-12 card padding-0">
                              <div class="option ">
                                <a href="{{asset('images/conference/option-d-lg.jpg')}}">
                                  <div class="header margin-10">
                                    Option D
                                  </div>
                                    <img  src="{{asset('images/conference/option-d-sm.jpg')}}"
                                        title="Option D: M40,000.00" class="img-responsive conference-img-lg image" >
                                        <span class="color-primary col-xs-12 text-center">
                                          <em>Click on image to enlarge</em>
                                        </span>
                                </a>
                              </div>
                              <div class="footer">
                                 <a class="col-xs-12 btn btn-primary" href="htt://www.enigma.co.ls" >
                                   Register
                                 </a>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-4 margin-top-10">
                            <div class="col-xs-12 card padding-0">
                              <div class="option ">
                                <a href="{{asset('images/conference/option-e-lg.jpg')}}">
                                  <div class="header margin-10">
                                    Option E
                                  </div>
                                    <img  src="{{asset('images/conference/option-e-sm.jpg')}}"
                                        title="Option E: M50,000.00" class="img-responsive conference-img-lg image" >
                                        <span class="color-primary col-xs-12 text-center">
                                          <em>Click on image to enlarge</em>
                                        </span>
                                </a>
                              </div>
                              <div class="footer">
                                 <a class="col-xs-12 btn btn-primary" href="htt://www.enigma.co.ls" >
                                   Register
                                 </a>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
      </div>
  </section>
@endsection
@section('scripts')
<script>
      $(document).ready(function(){
         $('#expo-setup').photobox('a',{ time:0 });
         $('#exhibition-setup').photobox('a',{ time:0 });
         $('.option').photobox('a',{ time:0 });
      });

</script>
@endsection
