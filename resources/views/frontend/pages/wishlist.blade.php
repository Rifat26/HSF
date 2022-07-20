@extends('frontend.layouts.master')
@section('title','Wishlist Page')
@section('main-content')
	


		 <div class="wrapper">
			<div class="gambo-Breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{('home')}}">Home</a></li>
									<li class="breadcrumb-item active" href="javascript:void(0);">Wishlist</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="dashboard-group">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="user-dt">
								<div class="user-img">
									<img src="images/avatar/img-5.jpg" alt="">
									<div class="img-add">
										<input type="file" id="file">
										<label for="file"><i class="uil uil-camera-plus"></i></label>
									</div>
								</div>
								<h4>Rifat</h4>
								<p>01787817803-<a href="#"><i class="uil uil-edit"></i></a></p>
								<div class="earn-points"><img src="images/Dollar.svg" alt="">Points : <span>20</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="left-side-tabs">
								<div class="dashboard-left-links">
									<a href="dashboard_overview.html" class="user-item"><i
											class="uil uil-apps"></i>Overview</a>
									<a href="dashboard_my_orders.html" class="user-item"><i class="uil uil-box"></i>My
										Orders</a>
									<a href="dashboard_my_rewards.html" class="user-item"><i class="uil uil-gift"></i>My
										Rewards</a>
									<a href="dashboard_my_wallet.html" class="user-item"><i class="uil uil-wallet"></i>My
										Wallet</a>
									<a href="dashboard_my_wishlist.html" class="user-item active"><i
											class="uil uil-heart"></i>Shopping Wishlist</a>
									<a href="dashboard_my_addresses.html" class="user-item"><i
											class="uil uil-location-point"></i>My Address</a>
									<a href="sign_in.html" class="user-item"><i class="uil uil-exit"></i>Logout</a>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8">
							<div class="dashboard-right">
								<div class="row">
									<div class="col-md-12">
										<div class="main-title-tab">
											<h4><i class="uil uil-heart"></i>Shopping Wishlist</h4>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="pdpt-bg">
											<div class="wishlist-body-dtt">
												@if(Helper::getAllProductFromWishlist())
													@foreach(Helper::getAllProductFromWishlist() as $key=>$wishlist)
												<div class="cart-item">
													@php 
														$photo=explode(',',$wishlist->product['photo']);
													@endphp
													<div class="cart-product-img">
														<img src="{{$photo ?? ''[0]}}" alt="{{$photo ?? ''[0]}}" alt="">
														
													</div>
													<div class="cart-text">
														<h4><a href="{{route('product-detail',$wishlist->product['slug'])}}">{{$wishlist->product['title']}}</a></h4>
														<div class="cart-item-price"><span>${{$wishlist['amount']}}</span></div>
														<button type="button" class="cart-close-btn"><i class="uil uil-trash-alt"></i></button>
														{{-- <td><a href="{{route('add-to-cart',$wishlist->product['slug'])}}" class='btn text-white'>Add To Cart</a></td> --}}
														{{-- <td class="action" data-title="Remove"><a href="{{route('wishlist-delete',$wishlist->id)}}"><i class="ti-trash remove-icon"></i></a></td> --}}
													</div>
												</div>
												@endforeach
												@else 
													<tr>
														<td class="text-center">
															There are no any wishlist available. <a href="{{route('product-grids')}}" style="color:blue;">Continue shopping</a>

														</td>
													</tr>
												@endif
												
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
	
@endsection



{{-- @push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@endpush --}}