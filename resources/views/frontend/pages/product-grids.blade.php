@extends('frontend.layouts.master')

@section('title','Home Service Food || PRODUCT PAGE')

@section('main-content')
	<!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Shop Grid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vegetables & Fruits</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-top-dt">
                            <div class="product-left-title">
                                <h2>Vegetables & Fruits</h2>
                            </div>
                            <a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>
                            <div class="product-sort">
                                <div class="ui selection dropdown vchrt-dropdown">
                                    <input name="gender" type="hidden" value="default">
                                    <i class="dropdown icon d-icon"></i>
                                    <div class="text">Popularity</div>
                                    <div class="menu">
                                        <div class="item" data-value="0">Popularity</div>
                                        <div class="item" data-value="1">Price - Low to High</div>
                                        <div class="item" data-value="2">Price - High to Low</div>
                                        <div class="item" data-value="3">Alphabetical</div>
                                        <div class="item" data-value="4">Saving - High to Low</div>
                                        <div class="item" data-value="5">Saving - Low to High</div>
                                        <div class="item" data-value="6">% Off - High to Low</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-view">
                    <div class="row">
                        {{-- {{$products}} --}}
                        @if(count($products)>0)
                        @foreach($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="product-item mb-30">
                                <a href="{{route('product-detail',$product->slug)}}" class="product-img">
                                    @php 
                                        $photo=explode(',',$product->photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <div class="product-absolute-options">
                                        @if($product->discount)
                                            <span class="offer-badge-1 price-dec">{{$product->discount}} % Off</span>
                                        @endif
                                        <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" class="wishlist" data-id="{{$product->id}}">
                                            <span class="like-icon" title="wishlist"></span>
                                        </a>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h4>
                                    @php
                                        $after_discount=($product->price-($product->price*$product->discount)/100);
                                    @endphp
                                    <div class="product-price">${{number_format($after_discount,2)}} <span>${{number_format($product->price,2)}}</span></div>
                                    <div class="qty-cart">
                                        {{-- <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div> --}}
                                        <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">
                                            <span class="cart-icon">
                                                <i class="uil uil-shopping-cart-alt"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @else
                            <p>There are no products.</p>
                        @endif
                        
                        <div class="col-md-12">
                            <div class="more-product-btn">
                                {{-- <button class="show-more-btn hover-btn" onclick="window.location.href = '#';">Show
                                    More</button> --}}
                                {{$products->appends($_GET)->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
 {{-- @push('styles')
    <style>
        .pagination{
            display:inline-flex;
        }
        .filter_button{
            /* height:20px; */
            text-align: center;
            background:#F7941D;
            padding:8px 16px;
            margin-top:10px;
            color: white;
        }
    </style>
 @endpush --}}
{{-- @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
    <script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>
@endpush --}}