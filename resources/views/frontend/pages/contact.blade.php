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
                        <div class="panel-group accordion" id="accordion0">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" href="#"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-location-point chck_icon"></i>Address
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne" data-parent="#accordion0" style="">
                                    <div class="panel-body">
                                        Head Office:<br>
                                        #0000, St No. 0, Savar, Dhaka<br>
                                        Savar- 141001<br>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="uil uil-phone-alt chck_icon"></i>Phone
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo" data-parent="#accordion0">
                                    <div class="panel-body">
                                        
                                        <div class="color-pink"> 01787817803</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            href="#" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-fast-mail chck_icon"></i>Email
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree" data-parent="#accordion0">
                                    <div class="panel-body">
                                        
                                        <div class="color-pink">homeservicefood@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="contact-title">
                            <h2>Submit customer service request</h2>
                            <p>If you have a question about our service or have an issue to report, please send a
                                request and we will get back to you as soon as possible.</p>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="form-group mt-1">
                                    <label class="control-label">Full Name*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="sendername"
                                                id="sendername" required="" placeholder="Your Full">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">Email Address*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="email" name="emailaddress"
                                                id="emailaddress" required="" placeholder="Your Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">Subject*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="sendersubject"
                                                id="sendersubject" required="" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <div class="field">
                                        <label class="control-label">Message*</label>
                                        <textarea rows="2" class="form-control" id="sendermessage" name="sendermessage"
                                            required="" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <button class="next-btn16 hover-btn mt-3" type="submit"
                                    data-btntext-sending="Sending...">Submit Request</button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
	<!--/ End Contact -->
	
	
	
	<!-- Start Shop Newsletter  -->
	@include('frontend.layouts.newsletter')
	<!-- End Shop Newsletter -->
	<!--================Contact Success  =================-->
	{{-- <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
	</div> --}}
	
	<!-- Modals error -->
	{{-- <div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
	</div> --}}
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