@extends('frontend.layouts.master')

@section('meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
	<meta name="description" content="{{$product_detail->summary}}">
	<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{$product_detail->title}}">
	<meta property="og:image" content="{{$product_detail->photo}}">
	<meta property="og:description" content="{{$product_detail->description}}">
@endsection
@section('title','Home Food Service || PRODUCT DETAIL')
@section('main-content')

<!-- Breadcrumbs -->
		<div class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="">Shop Details</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- End Breadcrumbs -->
				
<!-- Shop Single -->
	<div class="all-product-grid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="product-dt-view">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div id="sync1" class="">
									@php 
										$photo=explode(',',substr($product_detail->photo,16));
										// dd($photo);
									@endphp
									@foreach($photo as $data)
										<div class="item" data-thumb="{{$data}}" rel="adjustX:10, adjustY:">
											<img src="{{$data}}" alt="{{$data}}" height="450" width="390">
										</div>
									@endforeach
								</div>
								<!-- <div id="sync2" class="owl-carousel owl-theme">
									@php 
										$photo=explode(',',$product_detail->photo);
										// dd($photo);
									@endphp
									@foreach($photo as $data)
										<div class="item" data-thumb="{{$data}}" rel="adjustX:10, adjustY:">
											<img src="{{$data}}" alt="{{$data}}">
										</div>
									@endforeach
									
								</div> -->
							</div>
							<div class="col-lg-8 col-md-8">
								<div class="product-dt-right">
									<h2>{{$product_detail->title}}</h2>
									
									
									
									<p class="pp-descp">{!!($product_detail->summary)!!}</p>

									<div class="product-group-dt">
										<ul>
											<li>
												@php 
                                                    $after_discount=($product_detail->price-(($product_detail->price*$product_detail->discount)/100));
                                                @endphp

												<div class="main-price color-discount"> Discount Price
													<span>&#2547;{{number_format($after_discount,2)}}</span>
												</div>
											</li>
											<li>
												<div class="main-price mrp-price">BDT Price
													<span>&#2547;{{number_format($product_detail->price,2)}}</span>
												</div>
											</li>
										</ul>
										<br>
										{{-- @if($product_detail->size)
										<div class="product-radio">
											<ul class="product-now">
												@php 
													$sizes=explode(',',$product_detail->size);
													// dd($sizes);
												@endphp
												@foreach($sizes as $size)
													<li>
														<input type="radio" id="p1" name="product1">
														<label for="p1">{{$size}}</label>
													</li>
												@endforeach
												
											</ul>
										</div>
										@endif --}}
										<form action="{{route('single-add-to-cart')}}" method="POST">
											@csrf
										<ul class="gty-wish-share">
											<li>
												<div class="qty-product">
													<div class="quantity buttons_added">
														

														<input type="hidden" name="slug" value="{{$product_detail->slug}}">
														<input class="input-text qty text" type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1" id="quantity">
															
														
														
													</div>
												</div>
											</li>
											{{-- <li>
												<a href="{{route('add-to-wishlist',$product_detail->slug)}}" class="btn min">
													<span class="like-icon save-icon" title="wishlist"></span>
												</a>
												
											</li> --}}
										</ul>
										<ul class="ordr-crt-share">
											<li>
												<button type="submit" class="add-cart-btn hover-btn">
													<i class="uil uil-shopping-cart-alt"></i>
													Add to Cart
												</button>
											</li>
											{{-- <li><button class="order-btn hover-btn">Order Now</button></li> --}}
										</ul>
										</form>
									</div>
									{{-- Stop point --}}
									<div class="pdp-details">
										<ul>
											<li>
												<div class="pdp-group-dt">
													<div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
													<div class="pdp-text-dt">
														<span>Lowest Price Guaranteed</span>
														<p>Get difference refunded if you find it cheaper anywhere
															else.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="pdp-group-dt">
													<div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
													<div class="pdp-text-dt">
														<span>Easy Returns & Refunds</span>
														<p>Return products at doorstep and get refund in seconds.
														</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				{{-- <div class="col-lg-4 col-md-12">
					<div class="pdpt-bg">
						<div class="pdpt-title">
							<h4>More Like This</h4>
						</div>
						<div class="pdpt-body scrollstyle_4">
							<div class="cart-item border_radius">
								<a href="single_product_view.html" class="cart-product-img">
									<img src="images/product/img-6.jpg" alt="">
									<div class="offer-badge">4% OFF</div>
								</a>
								<div class="cart-text">
									<h4>Product Title Here</h4>
									<div class="cart-radio">
										<ul class="kggrm-now">
											<li>
												<input type="radio" id="k1" name="cart1">
												<label for="k1">0.50</label>
											</li>
											<li>
												<input type="radio" id="k2" name="cart1">
												<label for="k2">1kg</label>
											</li>
											<li>
												<input type="radio" id="k3" name="cart1">
												<label for="k3">2kg</label>
											</li>
											<li>
												<input type="radio" id="k4" name="cart1">
												<label for="k4">3kg</label>
											</li>
										</ul>
									</div>
									<div class="qty-group">
										<div class="quantity buttons_added">
											<input type="button" value="-" class="minus minus-btn">
											<input type="number" step="1" name="quantity" value="1"
												class="input-text qty text">
											<input type="button" value="+" class="plus plus-btn">
										</div>
										<div class="cart-item-price">$12 <span>$15</span></div>
									</div>
								</div>
							</div>
							<div class="cart-item border_radius">
								<a href="single_product_view.html" class="cart-product-img">
									<img src="images/product/img-2.jpg" alt="">
									<div class="offer-badge">6% OFF</div>
								</a>
								<div class="cart-text">
									<h4>Product Title Here</h4>
									<div class="cart-radio">
										<ul class="kggrm-now">
											<li>
												<input type="radio" id="k5" name="cart2">
												<label for="k5">0.50</label>
											</li>
											<li>
												<input type="radio" id="k6" name="cart2">
												<label for="k6">1kg</label>
											</li>
											<li>
												<input type="radio" id="k7" name="cart2">
												<label for="k7">2kg</label>
											</li>
										</ul>
									</div>
									<div class="qty-group">
										<div class="quantity buttons_added">
											<input type="button" value="-" class="minus minus-btn">
											<input type="number" step="1" name="quantity" value="1"
												class="input-text qty text">
											<input type="button" value="+" class="plus plus-btn">
										</div>
										<div class="cart-item-price">$24 <span>$30</span></div>
									</div>
								</div>
							</div>
							<div class="cart-item border_radius">
								<a href="single_product_view.html" class="cart-product-img">
									<img src="images/product/img-5.jpg" alt="">
								</a>
								<div class="cart-text">
									<h4>Product Title Here</h4>
									<div class="cart-radio">
										<ul class="kggrm-now">
											<li>
												<input type="radio" id="k8" name="cart3">
												<label for="k8">0.50</label>
											</li>
											<li>
												<input type="radio" id="k9" name="cart3">
												<label for="k9">1kg</label>
											</li>
											<li>
												<input type="radio" id="k10" name="cart3">
												<label for="k10">1.50kg</label>
											</li>
										</ul>
									</div>
									<div class="qty-group">
										<div class="quantity buttons_added">
											<input type="button" value="-" class="minus minus-btn">
											<input type="number" step="1" name="quantity" value="1"
												class="input-text qty text">
											<input type="button" value="+" class="plus plus-btn">
										</div>
										<div class="cart-item-price">$15</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<div class="col-lg-8 col-md-12">
					<div class="pdpt-bg">
						<div class="pdpt-title">
							<h4>Product Details</h4>
						</div>
						<div class="pdpt-body scrollstyle_4">
							<div class="pdct-dts-1">
								<div class="pdct-dt-step">
									<h4>Description</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere
										nunc in condimentum maximus. Integer interdum sem sollicitudin, porttitor
										felis in, mollis quam. Nunc gravida erat eu arcu interdum eleifend. Cras
										tortor velit, dignissim sit amet hendrerit sed, ultricies eget est. Donec
										eget urna sed metus dignissim cursus.</p>
								</div>
								<div class="pdct-dt-step">
									<h4>Benefits</h4>
									<div class="product_attr">
										Aliquam nec nulla accumsan, accumsan nisl in, rhoncus sapien.<br>
										In mollis lorem a porta congue.<br>
										Sed quis neque sit amet nulla maximus dignissim id mollis urna.<br>
										Cras non libero at lorem laoreet finibus vel et turpis.<br>
										Mauris maximus ligula at sem lobortis congue.<br>
									</div>
								</div>
								<div class="pdct-dt-step">
									<h4>How to Use</h4>
									<div class="product_attr">
										The peeled, orange segments can be added to the daily fruit bowl, and its
										juice is a refreshing drink.
									</div>
								</div>
								<div class="pdct-dt-step">
									<h4>Seller</h4>
									<div class="product_attr">
										Gambolthemes Pvt Ltd, Sks Nagar, Near Mbd Mall, Ludhana, 141001
									</div>
								</div>
								<div class="pdct-dt-step">
									<h4>Disclaimer</h4>
									<p>Phasellus efficitur eu ligula consequat ornare. Nam et nisl eget magna
										aliquam consectetur. Aliquam quis tristique lacus. Donec eget nibh et quam
										maximus rutrum eget ut ipsum. Nam fringilla metus id dui sollicitudin, sit
										amet maximus sapien malesuada.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--/ End Shop Single -->

<!-- Start Most Popular -->
<div class="product-area most-popular related-product section">
<div class="container">
	{{-- <div class="row">
		<div class="col-12">
			<div class="section-title">
				<h2>Related Products</h2>
			</div>
		</div>
	</div> --}}
	<div class="row">
		{{-- {{$product_detail->rel_prods}} --}}
		<div class="col-12">
			<div class="owl-carousel popular-slider">
				@foreach($product_detail->rel_prods as $data)
					@if($data->id !==$product_detail->id)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="{{route('product-detail',$data->slug)}}">
									@php 
										$photo=explode(',',$data->photo);
									@endphp
									<img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
									<img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
									<span class="price-dec">{{$data->discount}} % Off</span>
															{{-- <span class="out-of-stock">Hot</span> --}}
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#modelExample" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{route('product-detail',$data->slug)}}">{{$data->title}}</a></h3>
								<div class="product-price">
									@php 
										$after_discount=($data->price-(($data->discount*$data->price)/100));
									@endphp
									<span class="old">${{number_format($data->price,2)}}</span>
									<span>${{number_format($after_discount,2)}}</span>
								</div>
							  
							</div>
						</div>
						<!-- End Single Product -->
							
					@endif
				@endforeach
			</div>
		</div>
	</div>
</div>
</div>
<!-- End Most Popular Area -->


<!-- Modal -->
<div class="modal fade" id="modelExample" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
	</div>
	<div class="modal-body">
		<div class="row no-gutters">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<!-- Product Slider -->
					<div class="product-gallery">
						<div class="quickview-slider-active">
							<div class="single-slider">
								<img src="images/modal1.png" alt="#">
							</div>
							<div class="single-slider">
								<img src="images/modal2.png" alt="#">
							</div>
							<div class="single-slider">
								<img src="images/modal3.png" alt="#">
							</div>
							<div class="single-slider">
								<img src="images/modal4.png" alt="#">
							</div>
						</div>
					</div>
				<!-- End Product slider -->
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="quickview-content">
					<h2>Flared Shift Dress</h2>
					<div class="quickview-ratting-review">
						<div class="quickview-ratting-wrap">
							<div class="quickview-ratting">
								<i class="yellow fa fa-star"></i>
								<i class="yellow fa fa-star"></i>
								<i class="yellow fa fa-star"></i>
								<i class="yellow fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<a href="#"> (1 customer review)</a>
						</div>
						<div class="quickview-stock">
							<span><i class="fa fa-check-circle-o"></i> in stock</span>
						</div>
					</div>
					<h3>$29.00</h3>
					<div class="quickview-peragraph">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
					</div>
					<div class="size">
						<div class="row">
							<div class="col-lg-6 col-12">
								<h5 class="title">Size</h5>
								<select>
									<option selected="selected">s</option>
									<option>m</option>
									<option>l</option>
									<option>xl</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<h5 class="title">Color</h5>
								<select>
									<option selected="selected">orange</option>
									<option>purple</option>
									<option>black</option>
									<option>pink</option>
								</select>
							</div>
						</div>
					</div>
					<div class="quantity">
						<!-- Input Order -->
						<div class="input-group">
							<div class="button minus">
								<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
									<i class="ti-minus"></i>
								</button>
							</div>
							<input type="text" name="qty" class="input-number"  data-min="1" data-max="1000" value="1">
							<div class="button plus">
								<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
									<i class="ti-plus"></i>
								</button>
							</div>
						</div>
						<!--/ End Input Order -->
					</div>
					<div class="add-to-cart">
						<a href="#" class="btn">Add to cart</a>
						<a href="#" class="btn min"><i class="ti-heart"></i></a>
						<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
					</div>
					<div class="default-social">
						<h4 class="share-now">Share:</h4>
						<ul>
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<!-- Modal end -->

@endsection

{{-- @push('styles')
	<style>
		/* Rating */
		.rating_box {
		display: inline-flex;
		}

		.star-rating {
		font-size: 0;
		padding-left: 10px;
		padding-right: 10px;
		}

		.star-rating__wrap {
		display: inline-block;
		font-size: 1rem;
		}

		.star-rating__wrap:after {
		content: "";
		display: table;
		clear: both;
		}

		.star-rating__ico {
		float: right;
		padding-left: 2px;
		cursor: pointer;
		color: #F7941D;
		font-size: 16px;
		margin-top: 5px;
		}

		.star-rating__ico:last-child {
		padding-left: 0;
		}

		.star-rating__input {
		display: none;
		}

		.star-rating__ico:hover:before,
		.star-rating__ico:hover ~ .star-rating__ico:before,
		.star-rating__input:checked ~ .star-rating__ico:before {
		content: "\F005";
		}

	</style>
@endpush  --}}

 @push('scripts')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

 {{-- <script>
        $('.cart').click(function(){
            var quantity=$('#quantity').val();
            var pro_id=$(this).data('id');
            // alert(quantity);
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							document.location.href=document.location.href;
						});
                    }
                }
            })
        });
    </script> --}}
@endpush 