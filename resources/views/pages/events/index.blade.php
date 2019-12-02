@extends('partials.master') 

@section('content')
<section>
    <div class="page-title">
        <h1>NULISTICE EXPO & Gala Dinner</h1>
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
                        <h3 class="stall-card-title">INNOVATION STALLS</h3>  
                        <a href="{{route('expo.register.view')}}" class="buy-ticket-btn btn-xs btn-primary">Request Stall</a>
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
                        The stalls will display tangible business products by NUL lecturers, students, graduates, and interested businesses from outside the NUL. Please note that only businesses that do value addition are accepted. We dont take businesses that buy and sell. Submission: Please submit an introduction of your businesls or product in less than 150 words. Put in your full contact details including email and cell phone (preferaly whatsapp). 
                    </p>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-clock" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Deadline: 30 December 2019
                    </h5>
                    <p style="font-style: italic;">
                        Buy a stall electronically here or put it into the following <a href="#" data-toggle="modal" data-target="#exampleModal">NUL account</a> (Send a proof of payment to: ketsi.motlatsi@gmail.com). 
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
                        <a href="#" class="buy-ticket-btn btn-xs btn-primary">Buy Tickets</a>                        
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
                        The conference will be in the form of a Science, Technology and Innovation Forum at the Gala Dinner. The Gala will be a time to enjoy and reflect on the journey of innovation.
                    </p>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-clock" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Deadline: 30 December 2019
                    </h5>
                    <p style="font-style: italic;">
                        Buy Gala Dinner tickets here electronically or find paper tickets at the NUL Innovation Hub. Contact ketsi.motlatsi@gmail.com or call +266 53256707 for more information.
                    </p>
				</div>
            </div>
            
            <div class="stall-card">
				<div class="stall-card-left">
					<img src="{{ asset('images/stalls/hackathon.jpg')}}" alt="">
				</div>
				<div class="stall-card-right">
                    <div class="stall-header">
                        <h3 class="stall-card-title">NUL-VODACOM HACKATHON</h3>
                        <a href="{{route('hackathon.apply')}}" class="buy-ticket-btn btn-xs btn-primary">Apply for Hackathon</a>                                                
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
                        This will be a 24 hour coding marathon (hackathon) where computer gurus and other thinkers  from Lesotho and South Africa's higher education institutions will battle it out, solving the most interesting problems of our time. NUL, LIMKWOKWIN, LEROTHOLI, BOTHO etc, and students and graduates from South Africa Universities Students are invited to apply.
                        A competing team must have a maximum of 5 competitors and a minimum of 1 competitor. Each team must have at least one person with a knowledge of coding. 
                    </p>
                    <h5 class="stall-card-subtitle">
                        <i class="fa fa-clock" style="color: #e13f30 !important;margin-right: 5px;" aria-hidden="true"></i>
                        Deadline: 30th of December 2020
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
                        <h5 class="modal-title" id="exampleModalLabel">Banking Details</h5>
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
