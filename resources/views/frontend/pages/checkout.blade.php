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
                            {{-- <div class="checkout-step">
                                <div class="checkout-card" id="headingOne">
                                    <span class="checkout-step-number">1</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Phone Number Verification</button>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse in show" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <p>We need your phone number so we can inform you about any delay or problem.
                                        </p>
                                        <p class="phn145">4 digits code send your phone <span>+918437176189</span><a
                                                class="edit-no-btn hover-btn" data-toggle="collapse"
                                                href="#edit-number">Edit</a></p>
                                        <div class="collapse" id="edit-number">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="checkout-login">
                                                        <form>
                                                            <div class="login-phone">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Phone Number">
                                                            </div>
                                                            <a class="chck-btn hover-btn" role="button"
                                                                data-toggle="collapse" href="#otp-verifaction">Send
                                                                Code</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="otp-verifaction">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-0">
                                                        <label class="control-label">Enter Code</label>
                                                        <ul class="code-alrt-inputs">
                                                            <li>
                                                                <input id="code[1]" name="number" type="text"
                                                                    placeholder="" class="form-control input-md"
                                                                    required="">
                                                            </li>
                                                            <li>
                                                                <input id="code[2]" name="number" type="text"
                                                                    placeholder="" class="form-control input-md"
                                                                    required="">
                                                            </li>
                                                            <li>
                                                                <input id="code[3]" name="number" type="text"
                                                                    placeholder="" class="form-control input-md"
                                                                    required="">
                                                            </li>
                                                            <li>
                                                                <input id="code[4]" name="number" type="text"
                                                                    placeholder="" class="form-control input-md"
                                                                    required="">
                                                            </li>
                                                            <li>
                                                                <a class="collapsed chck-btn hover-btn" role="button"
                                                                    data-toggle="collapse"
                                                                    data-parent="#checkout_wizard"
                                                                    href="#collapseTwo">Next</a>
                                                            </li>
                                                        </ul>
                                                        <a href="#" class="resend-link">Resend Code</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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
                                                        {{-- <div class="form-group">
                                                            <div class="product-radio">
                                                                <ul class="product-now">
                                                                    <li>
                                                                        <input type="radio" id="ad1" name="address1"
                                                                            checked>
                                                                        <label for="ad1">Home</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="ad2" name="address1">
                                                                        <label for="ad2">Office</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="ad3" name="address1">
                                                                        <label for="ad3">Other</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> --}}
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
                                                                {{-- <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Flat / House /
                                                                            Office No.*</label>
                                                                        <input id="flat" name="flat" type="text"
                                                                            placeholder="Address"
                                                                            class="form-control input-md" required="">
                                                                    </div>
                                                                </div> --}}

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
                                                                            {{-- <button class="save-btn14 hover-btn">Save</button> --}}
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
                            {{-- <div class="checkout-step">
                                <div class="checkout-card" id="headingThree">
                                    <span class="checkout-step-number">2</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"> Delivery Time & Date </button>
                                    </h4>
                                </div>
                                 <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Select Date and Time*</label>
                                                    <div class="date-slider-group">
                                                        <div class="owl-carousel date-slider owl-theme">
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd1" name="address1"
                                                                        checked="">
                                                                    <label for="dd1">Today</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd2" name="address1">
                                                                    <label for="dd2">Tomorrow</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd3" name="address1">
                                                                    <label for="dd3">10 May 2020</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd4" name="address1">
                                                                    <label for="dd4">11 May 2020</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd5" name="address1">
                                                                    <label for="dd5">12 May 2020</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd6" name="address1">
                                                                    <label for="dd6">13 May 2020</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd7" name="address1">
                                                                    <label for="dd7">14 May 2020</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd8" name="address1">
                                                                    <label for="dd8">15 May 2020</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-radio">
                                                        <div class="ui form">
                                                            <div class="grouped fields">
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" checked=""
                                                                            tabindex="0" class="hidden">
                                                                        <label>8.00AM - 10.00AM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0"
                                                                            class="hidden">
                                                                        <label>10.00AM - 12.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0"
                                                                            class="hidden">
                                                                        <label>12.00PM - 2.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0"
                                                                            class="hidden">
                                                                        <label>2.00PM - 4.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0"
                                                                            class="hidden">
                                                                        <label>4.00PM - 6.00PM</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <a class="collapsed next-btn16 hover-btn" role="button" data-toggle="collapse"
                                            href="#collapseFour"> Proccess to payment </a>
                                    </div>
                                </div> 
                            </div> --}}
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
                                                            {{-- <li>
                                                                <div class="radio-item_1">
                                                                    <input id="card1" value="card" name="paymentmethod"
                                                                        type="radio" data-minimum="50.0">
                                                                    <label for="card1" class="radio-label_1">Credit /
                                                                        Debit Card</label>
                                                                </div>
                                                            </li> --}}
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
                                                    {{-- <div class="form-group return-departure-dts" data-method="card">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title mb-4">
                                                                    <h4>Credit / Debit Card</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Holder Name*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore"
                                                                                type="text" name="holdername" value=""
                                                                                id="holder[name]" required=""
                                                                                maxlength="64"
                                                                                placeholder="Holder Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Card Number*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore"
                                                                                type="text" name="cardnumber" value=""
                                                                                id="card[number]" required=""
                                                                                maxlength="64"
                                                                                placeholder="Card Number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Expiration
                                                                        Month*</label>
                                                                    <select
                                                                        class="ui fluid search dropdown form-dropdown"
                                                                        name="card[expire-month]">
                                                                        <option value="">Month</option>
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Expiration
                                                                        Year*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore"
                                                                                type="text" name="card[expire-year]"
                                                                                maxlength="4" placeholder="Year">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">CVV*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore"
                                                                                name="card[cvc]" maxlength="3"
                                                                                placeholder="CVV">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
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
                            {{-- <div class="right-cart-dt-body">
                                <div class="cart-item border_radius">
                                    <div class="cart-product-img">
                                        <img src="assets/images/product/img-11.jpg" alt="">
                                        <div class="offer-badge">4% OFF</div>
                                    </div>
                                    <div class="cart-text">
                                        <h4>Product Title Here</h4>
                                        <div class="cart-item-price">$15 <span>$18</span></div>
                                        <button type="button" class="cart-close-btn"><i
                                                class="uil uil-multiply"></i></button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="total-checkout-group">
                                <div class="cart-total-dil">
                                    <h4 class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart Subtotal</h4>
                                    <span>${{number_format(Helper::totalCartPrice(),2)}}</span>
                                </div>
                                <div class="cart-total-dil pt-3">
                                    <h4>Delivery Charges</h4>
                                    @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                    <div class="select_location">
                                        <select name="shipping">
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
                                        {{-- <select name="shipping" class="nice-select">
                                            <option value="">Select your address</option>
                                            @foreach(Helper::shipping() as $shipping)
                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ${{$shipping->price}}</option>
                                            @endforeach
                                        </select> --}}
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