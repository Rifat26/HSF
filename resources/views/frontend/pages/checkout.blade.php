@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <!-- <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Breadcrumbs -->



    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div id="checkout_wizard" class="checkout accordion left-chck145">
                            
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingTwo">
                                    <span class="checkout-step-number">1</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"> Delivery Address</button>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="checout-address-step">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form class="form" method="POST" action="{{route('cart.order')}}">
                                                        @csrf
                                                        
                                                        <div class="address-fieldset">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">First Name*</label>
                                                                        <input id="name" type="text" name="first_name" placeholder="First Name" class="form-control input-md" value="{{old('first_name')}}">
                                                                        @error('first_name')
                                                                            <span class='text-danger'>{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Last Name*</label>
                                                                        <input id="name" type="text" name="last_name" placeholder="Last Name" class="form-control input-md" value="{{old('lat_name')}}" required="">
                                                                        @error('last_name')
                                                                            <span class='text-danger'>{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email*</label>
                                                                        <input id="email" type="email" name="email" placeholder="Email" class="form-control input-md" value="{{old('email')}}">
                                                                        @error('email')
                                                                            <span class='text-danger'>{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Phone Number*</label>
                                                                        <input id="phone" type="number" name="phone" placeholder="Phone Number" class="form-control input-md" required value="{{old('phone')}}">
                                                                        @error('phone')
                                                                            <span class='text-danger'>{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                               

                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Locality*</label>
                                                                        <input name="country" id="country" type="text"
                                                                            placeholder="Bangladesh"
                                                                            class="form-control input-md" value="BD">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Address Line 1*</label>
                                                                        <input id="street" type="text" name="address1" placeholder="Address Line 1" class="form-control input-md" value="{{old('address1')}}">
                                                                        @error('address1')
                                                                            <span class='text-danger'>{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Address Line 2*</label>
                                                                        <input id="street" type="text" name="address2" placeholder="Address Line 2" class="form-control input-md" value="{{old('address2')}}">
                                                                        @error('address2')
                                                                            <span class='text-danger'>{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Postal code*</label>
                                                                        <input id="pincode" name="post_code" type="text"
                                                                            placeholder="postal code"
                                                                            class="form-control input-md" value="{{old('post_code')}}">
                                                                            @error('post_code')
                                                                                <span class='text-danger'>{{$message}}</span>
                                                                            @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="address-btns">
                                                                            
                                                                            <a class="collapsed ml-auto next-btn16 hover-btn"
                                                                                role="button" data-toggle="collapse"
                                                                                data-parent="#checkout_wizard"
                                                                                href="#collapseFour"> Next </a>
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
                            </div>
                            
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingFour">
                                    <span class="checkout-step-number">2</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">Payment</button>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="payment_method-checkout">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="rpt100">
                                                        <ul class="radio--group-inline-container_1">
                                                            <li>
                                                                <div class="radio-item_1">
                                                                    <input id="cashondelivery1" value="cashondelivery"
                                                                        name="paymentmethod" type="radio"
                                                                        data-minimum="50.0">
                                                                    <label for="cashondelivery1" class="radio-label_1" name="payment_method"  type="radio" value="cod">Cash on Delivery</label>
                                                                </div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="form-group return-departure-dts"
                                                        data-method="cashondelivery">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title">
                                                                    <h4>Cash on Delivery</h4>
                                                                    <p>Thanks so much for your order! I hope you enjoy your new purchase! </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="single-widget get-button">
                                                        <button type="submit" class="btn next-btn16 hover-btn">Place Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="pdpt-bg mt-0">
                            <div class="pdpt-title">
                                <h4>Order Summary</h4>
                            </div>
                            
                            <div class="total-checkout-group">
                                <div class="cart-total-dil">
                                    <h4 class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart Subtotal</h4>
                                    <span>${{number_format(Helper::totalCartPrice(),2)}}</span>
                                </div>
                                <div class="shipping">
                                    <h4>Delivery Charges</h4>
                                    @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                    <div class="select_location">
                                        <select name="shipping" class="nice-select">
                                            <div class="ui inline dropdown loc-title">
                                                <div class="text">
                                                    <option  value="">
                                                        Select your address
                                                    </option>
                                                </div>
                                                <div class="menu dropdown_loc">
                                                    @foreach(Helper::shipping() as $shipping)
                                                    <div class="item channel_item">
                                                        <option  value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">
                                                            {{$shipping->type}}: &#2547;{{$shipping->price}}
                                                        </option>
                                                        
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </select>
                                    </div>
                                       
                                    @else 
                                        <span>Free</span>
                                    @endif
                                </div>
                            </div>
                            <div class="cart-total-dil saving-total ">
                                @if(session('coupon'))
                                    <h4 class="coupon_price" data-price="{{session('coupon')['value']}}">You Save</h4>
                                    <span>${{number_format(session('coupon')['value'],2)}}</span>
                                    @endif
                            </div>
                            <div class="main-total-cart">
                                @php
                                    $total_amount=Helper::totalCartPrice();
                                    if(session('coupon')){
                                        $total_amount=$total_amount-session('coupon')['value'];
                                    }
                                @endphp
                                @if(session('coupon'))
                                    <h2 class="last"  id="order_total_price">Total</h2>
                                    <span>${{number_format($total_amount,2)}}</span>
                                @else
                                    <h2 class="last"  id="order_total_price">Total</h2>
                                    <span>${{number_format($total_amount,2)}}</span>
                                @endif
                            </div>
                            <div class="payment-secure">
                                <i class="uil uil-padlock"></i>Secure checkout
                            </div>
                        </div>
                        {{-- <a href="#" class="promo-link45">Have a promocode?</a>  --}}
                        <div class="checkout-safety-alerts">
                            <p><i class="uil uil-sync"></i>100% Replacement Guarantee</p>
                            <p><i class="uil uil-check-square"></i>100% Genuine Products</p>
                            <p><i class="uil uil-shield-check"></i>Secure Payments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection

 @push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

 @endpush 