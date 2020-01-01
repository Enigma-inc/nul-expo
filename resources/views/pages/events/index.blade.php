@extends('partials.master') 

@section('content')
<section>
    <div class="page-title">
        <h1>NULISTICE EXPO, Gala Dinner & Hackathon</h1>
    </div>
</section>
<section class="padding-20">
    <div class="auto-container">
        <div class="row clearfix">            
            <div class="stall-card">
				<div class="stall-card-left">
					<img src="{{ asset('images/stalls/expo.jpg')}}" alt="">
				</div>
				<div class="stall-card-right">
                    <div class="stall-header">
                        <h3 class="stall-card-title">Expo STALLS</h3>  
                        <div class="buttons">
                            @if (date('d/m/Y') > date('15/01/2020'))
                                <button class="btn btn-xs btn-primary">
                                    Applications closed.
                                </button>
                                @else
                                <a href="{{ route('expo.register.view')}}">
                                    <img src="{{asset('compiled/images/register-stall.svg')}}">
                                </a>
                            @endif

                            
                            <a href="https://app.ticketbox.co.ls/e/3/nulistice-2020-expo-gala-dinner" target="_blank">
                                <img src="{{asset('compiled/images/get-tickets-blue.svg')}}">
                            </a>
                        </div> 
                    </div>

                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-calendar-o" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Date: Tuesday 21st of January 2020 to Friday 24th of January 2020
                    </h5>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-building" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Venue: Pioneer Mall ground and first floor corridors
                    </h5>
					<p style="text-align: justify;">
                        The stalls will display tangible innovative products by NUL lecturers, students, graduates, and interested businesses from outside the NUL. Please note that only businesses that do value addition are accepted. We don't take businesses that buy and sell. <br>
                        Submission: Please submit an introduction of your business or product (just a sentence). Put in your full contact details including email and cell phone (preferaly whatsapp). 
                    </p>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-clock" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Deadline: 30 December 2019
                    </h5>
                    <p style="font-style: italic;">
                        Buy a stall electronically <a href="https://app.ticketbox.co.ls/e/3/nulistice-2020-expo-gala-dinner" target="_blank">here</a> or put it into the following <a href="#" data-toggle="modal" data-target="#exampleModal">NUL account</a> (Send a proof of payment to: ketsi.motlatsi@gmail.com). 
                    </p>
				</div>
            </div>

            <div class="stall-card">
				<div class="stall-card-left">
					<img src="{{ asset('images/stalls/gala-dinner.jpg')}}" alt="">
				</div>
				<div class="stall-card-right">
                    <div class="stall-header">
                        <h3 class="stall-card-title">GALA DINNER</h3>
                        @if (date('d/m/Y') > date('15/01/2020'))
                            <button class="btn btn-xs btn-primary">
                                Applications closed.
                            </button>
                            @else
                            <a href="https://app.ticketbox.co.ls/e/3/nulistice-2020-expo-gala-dinner" target="_blank">
                                <img src="{{asset('compiled/images/get-tickets-yellow.svg')}}">
                            </a>   
                        @endif                     
                    </div>
					<h5 class="stall-card-subtitle">
                        <i class="fa fa-calendar-o" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Date: Thursday 23rd of January 2020
                    </h5>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-building" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Vanue: Avani Maseru
                    </h5>
					<p style="text-align: justify;">
                        The Conference will be in the form of a Science, Technology and Innovation Forum at the Gala Dinner. The Gala will be a time to enjoy and reflect on the journey of innovation.
                    </p>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-clock" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Deadline: 30 December 2019
                    </h5>
                    <p style="font-style: italic;">
                        Buy Gala Dinner tickets <a href="https://app.ticketbox.co.ls/e/3/nulistice-2020-expo-gala-dinner" target="_blank">here</a> electronically or find paper tickets at the NUL Innovation Hub. Contact: ketsi.motlatsi@gmail.com or call +266 53256707 for more information.
                    </p>
				</div>
            </div>
            
            <div class="stall-card">
				<div class="stall-card-left">
					<img src="{{ asset('images/stalls/hackathon.jpg')}}" alt="">
				</div>
				<div class="stall-card-right">
                    <div class="stall-header">
                        <h3 class="stall-card-title">NUL-UNDP-VODACOM HACKATHON</h3>
                        @if (date('d/m/Y') > date('15/01/2020'))
                            <button class="btn btn-xs btn-primary">
                                Applications closed.
                            </button>
                            @else
                            <a href="{{route('hackathon.apply')}}" >
                                <img src="{{asset('compiled/images/apply.svg')}}">
                            </a> 
                        @endif                                               
                    </div>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-calendar-o" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Date: Midday and of the 18th January 2020 to Midday of the 19th January 2020
                    </h5>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-building" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Vanue: NUL, Roma
                    </h5>
					<p style="text-align: justify;">
                        This will be a 24 hour coding marathon (hackathon) where computer gurus and thinkers from other disciplines in Lesotho and South Africa's higher education institutions will battle it out, solving the most interesting problems of our time. Students and graduates from NUL, LIMKWOKWIN, LEROTHOLI, BOTHO etc, and South Africa Universities are invited to apply. <br>
                        Competing teams must have a maximum of 5 competitors and a minimum of 1 competitor. Each team must have at least one person with a knowledge of coding. Awards will be given to winners. 
                    </p>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-clock" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Deadline: 15th of January 2020
                    </h5>
                    <p style="font-style: italic;">
                        Contact: ketsi.motlatsi@gmail.com or call +266 53256707 for more information.
                    </p>
				</div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Deposit Banking Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <strong>Bank</strong>: Standard Lesotho Bank <br>
                            <strong>Account</strong>: Current Account <br>
                            <strong>Account Number</strong>: 9080002587781 <br>
                            <strong>Branch</strong>: Roma <br>
                            <strong>Branch Code</strong>: 062867 <br>
                            <strong>Swift Address</strong>: SBICLSMX <br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
