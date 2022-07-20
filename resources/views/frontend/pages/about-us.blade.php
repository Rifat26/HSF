@extends('frontend.layouts.master')

@section('title','Home Food Service || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
	<div class="wrapper">
        <div class="default-dt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        {{-- <div class="default_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_default  justify-content-center">
                                    <a class="nav-item nav-link active" href="about_us.html">About</a>
                                    <a class="nav-item nav-link" href="our_blog.html">Blog</a>
                                    <a class="nav-item nav-link" href="career.html">Careers</a>
                                    <a class="nav-item nav-link" href="press.html">Press</a>
                                </div>
                            </nav>
                        </div> --}}
                        <div class="title129">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="life-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="default-title left-text">
                            <h2>Welcome To Home Food Service</h2>
                            <p>Customers Deserve Better</p>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
                            <p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="images/about.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="how-order-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-title">
                            <h2>How Do I Order?</h2>
                            <p>How Do I order on Gambo</p>
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-search"></i>
                            </div>
                            <h4>Browse gambo.com for products or use the search feature</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-shopping-basket"></i>
                            </div>
                            <h4>Add item to your shopping Basket</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-stopwatch"></i>
                            </div>
                            <h4>Choose a convenient delivery time from our 5 Slots* a day</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-money-bill"></i>
                            </div>
                            <h4>Select suitable payment option(Cash, Master, Credit Card, Discover)</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-truck"></i>
                            </div>
                            <h4>Your products will be home-delivered as per your order.</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-smile"></i>
                            </div>
                            <h4>Happy Curstomers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	
	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	@include('frontend.layouts.newsletter')
@endsection