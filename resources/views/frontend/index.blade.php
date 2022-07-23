@extends('frontend.layouts.master')
@section('title','Home Food Service || HOME PAGE')
@section('main-content')
<div class="wrapper">

    <div class="main-banner-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel offers-banner owl-theme">
                        @foreach($banners as $key=>$banner)
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="{{substr($banner->photo,16)}}" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Off</p>
                                            <div class="top-text-1">{{$banner->title}}</div>
                                            <span>{!! html_entity_decode($banner->description) !!}</span>
                                        </div>
                                        <a href="{{route('product-grids')}}" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section145">
        <div class="container">
            <div class="row">
                @php 
                    $category_lists=DB::table('categories')->where('status','active')->limit(3)->get();
                @endphp
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>Shop By</span>
                            <h2>Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel cate-slider owl-theme">
                        @if($category_lists)
                            @foreach(Helper::getAllCategory() as $cat)
                                @if($cat->is_parent==1)
                                        <div class="item">
                                            <a href="{{route('product-cat',$cat->slug)}}" class="category-item">
                                                <div class="cate-img">
                                                    @if($cat->photo)
                                                        <img src="{{substr($cat->photo,16)}}" alt="{{$cat->photo}}">
                                                        @else
                                                        <img src="https://via.placeholder.com/600x370" alt="#">
                                                    @endif
                                                    
                                                </div>
                                                <h4>{{$cat->title}}</h4>
                                            </a>
                                        </div>
                                @endif
                            @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>For You</span>
                            <h2>Top Featured Products</h2>
                        </div>
                        <a href="#" class="see-more-btn">See All</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel featured-slider owl-theme">
                        @if($product_lists)
                            @foreach($product_lists as $key=>$product)
                        <div class="item">
                            <div class="product-item">
                                <a href="{{route('product-detail',$product->slug)}}" class="product-img">
                                    @php 
                                        $photo=explode(',',substr($product->photo,16));
                                    // dd($photo);
                                    @endphp
                                    <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">{{$product->discount}}% off</span>
                                        {{-- <a href="{{route('add-to-wishlist',$product->slug)}}"><span class="like-icon" title="wishlist"></span></a> --}}
                                        {{-- <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><span class="like-icon" title="wishlist"><span>Add to Wishlist</span></a> --}}
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    @if($product->stock<=0)
                                        <p>Available<span class="out-of-stock">(In Stock)</span></p>
                                    @elseif($product->condition=='new')
                                        <p>Available<span class="New">(New)</span></p>
                                        
                                    @elseif($product->condition=='hot')
                                        <p>Available<span class="hot">(Hot)</span></p>
                                        
                                    @else
                                        <span class="price-dec">{{$product->discount}}% Off</span>
                                    @endif
                                    
                                    <h4><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h4>
                                    @php
                                        $after_discount=($product->price-($product->price*$product->discount)/100);
                                    @endphp
                                    <div class="product-price">&#2547;{{number_format($after_discount,2)}} <span>&#2547;{{number_format($product->price,2)}}</span></div>
                                    <div class="qty-cart">
                                        
                                        <span class="cart-icon"><a href="{{route('add-to-cart',$product->slug)}}"><i class="uil uil-shopping-cart-alt"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>Offers</span>
                            <h2>Best Values</h2>
                        </div>
                    </div>
                </div>
            @if($featured)
                @foreach($featured as $data)
                {{-- <div class="col-lg-4 col-md-6">
                    <a href="#" class="best-offer-item">
                        <img src="assets/images/best-offers/offer-1.jpg" alt="">
                    </a>
                </div> --}}
                <div class="col-lg-4 col-md-6">
                    @php 
                        $photo=explode(',',substr($banner->photo,16));
                    @endphp
                    <a href="{{route('product-detail',$data->slug)}}" class="best-offer-item">
                        
                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                        <div class="content">
                            <p>{{$data->cat_info['title']}}</p>
                            <h3>{{$data->title}} <br>Up to<span> {{$data->discount}}%</span></h3>
                            
                        </div>
                        
                    </a>
                </div>
                @endforeach
            @endif
                {{-- <div class="col-lg-4 col-md-6">
                    <a href="#" class="best-offer-item offr-none">
                        <img src="assets/images/best-offers/offer-3.jpg" alt="">
                        <div class="cmtk_dt">
                            <div class="product_countdown-timer offer-counter-text" data-countdown="2021/01/06">
                            </div>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="col-md-12">
                    <a href="#" class="code-offer-item">
                        <img src="assets/images/best-offers/offer-4.jpg" alt="">
                    </a>
                </div> --}}
            </div>
        </div>
    </div>


    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>For You</span>
                            <h2>Fresh Vegetables & Fruits</h2>
                        </div>
                        <a href="#" class="see-more-btn">See All</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel featured-slider owl-theme">
                        @foreach($product_lists as $product)
                        @if($product->condition=='hot')
                        <div class="item">
                            <div class="product-item">
                                <a href="{{route('product-detail',$product->slug)}}" class="product-img">
                                    @php 
                                        $photo=explode(',',substr($product->photo,16));
                                    // dd($photo);
                                    @endphp
                                    <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <div class="product-absolute-options">
                                    @php 
                                    $after_discount=($product->price-($product->price*$product->discount)/100)
                                    @endphp
                                    {{-- <span class="offer-badge-1">$______</span> --}}
                                        
                                        {{-- <a href="{{route('add-to-wishlist',$product->slug)}}"><span class="like-icon" title="wishlist"></span> --}}
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    {{-- <p>{{route('product-detail',$product->slug)}}</p> --}}
                                    <h4>{{$product->title}}</h4>
                                    <div class="product-price">&#2547;{{number_format($after_discount,2)}}<span>&#2547;{{number_format($product->price,2)}}</span></div>
                                    
                                    
                                    <div class="qty-cart">
                                        
                                        <a href="{{route('add-to-cart',$product->slug)}}"><span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                        {{-- <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-12.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">2% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$10 <span>$13</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-13.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">5% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$5 <span>$8</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-1.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">3% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$15 <span>$20</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-5.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">2% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$9 <span>$10</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-6.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">2% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$7 <span>$8</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-14.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">1% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$6.95 <span>$7</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-3.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">3% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$8 <span>$10</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>For You</span>
                            <h2>Added New Products</h2>
                        </div>
                        {{-- <a href="#" class="see-more-btn">See All</a> --}}
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="owl-carousel featured-slider owl-theme">
                        @php
                            $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(6)->get();
                        @endphp
                        @foreach($product_lists as $product)
                        <div class="item">
                            <div class="product-item">
                                <a href="{{route('add-to-cart',$product->slug)}}" class="product-img">
                                    @php 
                                        $photo=explode(',',substr($product->photo,16));
                                        // dd($photo);
                                    @endphp
                                    <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        {{-- <span class="like-icon" title="wishlist"></span> --}}
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    {{-- <p>Available<span>(In Stock)</span></p> --}}
                                    <h4>{{$product->title}}</h4>
                                    <div class="product-price">&#2547;{{number_format($product->discount,2)}}</div>
                                    <div class="qty-cart">
                                        {{-- <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div> --}}
                                        <a href="{{route('add-to-cart',$product->slug)}}"><span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-9.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$10</div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-15.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">5% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$5</div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-11.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$15 <span>$16</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-14.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$9</div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-2.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$7</div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-5.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$6.95</div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="single_product_view.html" class="product-img">
                                    <img src="assets/images/product/img-6.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$8 <span>8.75</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection