@extends('frontend.layouts.master')

@section('main-content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	<div class="wrapper">
        
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {{-- <div class="panel-group accordion" id="accordion0">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" href="#"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-location-point chck_icon"></i>Ludhiana
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne" data-parent="#accordion0" style="">
                                    <div class="panel-body">
                                        Ludhiana Head Office:<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Ludhiana, Punjab<br>
                                        Ludhiana- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="uil uil-location-point chck_icon"></i>Gurugram
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Gurugram Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Gurugram, Haryana<br>
                                        Gurugram- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            href="#" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-location-point chck_icon"></i>New Delhi
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree" data-parent="#accordion0">
                                    <div class="panel-body">
                                        New Delhi Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, New Delhi<br>
                                        New Delhi- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfour">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefour" href="#"
                                            aria-expanded="false" aria-controls="collapsefour">
                                            <i class="uil uil-location-point chck_icon"></i>Bangaluru
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingfour" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Bangaluru Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Bangaluru<br>
                                        Bangaluru- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfive">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefive" href="#"
                                            aria-expanded="false" aria-controls="collapsefive">
                                            <i class="uil uil-location-point chck_icon"></i>Mumbai
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingfive" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Mumbai Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Mumbai<br>
                                        Mumbai- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingsix">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsesix" href="#"
                                            aria-expanded="false" aria-controls="collapsesix">
                                            <i class="uil uil-location-point chck_icon"></i>Hyderabad
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingsix" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Hyderabad Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Hyderabad<br>
                                        Hyderabad- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingseven">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseseven"
                                            href="#" aria-expanded="false" aria-controls="collapseseven">
                                            <i class="uil uil-location-point chck_icon"></i>Kolkata
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingseven" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Kolkata Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Kolkata<br>
                                        Kolkata- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseeight"
                                            href="#" aria-expanded="false" aria-controls="collapseeight">
                                            <i class="uil uil-location-point chck_icon"></i>Chandigrah
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Chandigrah Branch :<br>
                                        #0000, St No. 0, Lorem ipsum dolor sit amet, Main road, Chandigrah<br>
                                        Chandigrah- 141001<br>
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-title">
                            <h2>Submit customer service request</h2>
                            <p>If you have a question about our service or have an issue to report, please send a
                                request and we will get back to you as soon as possible.</p>
                        </div>
						@php
							$settings=DB::table('settings')->get();
						@endphp
                        <div class="contact-form">
                            <form method="post" action="{{route('contact.store')}}" id="contactForm" novalidate="novalidate">
								@csrf
                                <div class="form-group mt-1">
                                    <label class="control-label">Full Name*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" name="name" id="name" type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">Email Address*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="email" id="email" placeholder="Enter email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">Subject*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" id="subject" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <div class="field">
                                        <label class="control-label">Message*</label>
                                        <textarea rows="2" class="form-control" id="message" name="message" 
                                            required="" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <button class="next-btn16 hover-btn mt-3" type="submit"
                                    data-btntext-sending="Sending...">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--/ End Contact -->
	
	<!-- Map Section -->
	{{-- <div class="map-section">
		<div id="myMap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.857353934944!2d85.36529494999999!3d27.6952226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sne!2snp!4v1595323330171!5m2!1sne!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div> --}}
	<!--/ End Map Section -->
	
	<!-- Start Shop Newsletter  -->
	@include('frontend.layouts.newsletter')
	<!-- End Shop Newsletter -->
	<!--================Contact Success  =================-->
	<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-success">Thank you!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-success">Your message is successfully sent...</p>
			</div>
		  </div>
		</div>
	</div>
	
	<!-- Modals error -->
	<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-warning">Sorry!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-warning">Something went wrong.</p>
			</div>
		  </div>
		</div>
	</div>
@endsection

@push('styles')
<style>
	.modal-dialog .modal-content .modal-header{
		position:initial;
		padding: 10px 20px;
		border-bottom: 1px solid #e9ecef;
	}
	.modal-dialog .modal-content .modal-body{
		height:100px;
		padding:10px 20px;
	}
	.modal-dialog .modal-content {
		width: 50%;
		border-radius: 0;
		margin: auto;
	}
</style>
@endpush
@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush