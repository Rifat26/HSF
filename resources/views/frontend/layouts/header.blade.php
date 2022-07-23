@auth
<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
    <div class="bs-canvas-header side-cart-header p-3 ">
        <div class="d-inline-block  main-cart-title">My Cart <span>({{count(Helper::getAllProductFromCart())}} Items)</span></div>
        <button type="button" class="bs-canvas-close close" aria-label="Close"><i
                class="uil uil-multiply"></i></button>
    </div>
    <div class="bs-canvas-body">
        {{-- <div class="cart-top-total">
            <div class="cart-total-dil">
                <h4>Gambo Super Market</h4>
                <span>$34</span>
            </div>
            <div class="cart-total-dil pt-2">
                <h4>Delivery Charges</h4>
                <span>$1</span>
            </div>
        </div> --}}
        <div class="side-cart-items">
            @foreach(Helper::getAllProductFromCart() as $data)
                @php
                    $photo=explode(',',substr($data->product['photo'],16));
                @endphp
                <div class="cart-item">
                    <div class="cart-product-img">
                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                        {{-- <img src="images/product/img-1.jpg" alt=""> --}}
                        {{-- <div class="offer-badge">6% OFF</div> --}}
                    </div>
                    <div class="cart-text">
                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                        {{-- <h4>Product Title Here</h4> --}}
                        {{-- <div class="cart-radio">
                            <ul class="kggrm-now">
                                <li>
                                    <input type="radio" id="a1" name="cart1">
                                    <label for="a1">0.50</label>
                                </li>
                                <li>
                                    <input type="radio" id="a2" name="cart1">
                                    <label for="a2">1kg</label>
                                </li>
                                <li>
                                    <input type="radio" id="a3" name="cart1">
                                    <label for="a3">2kg</label>
                                </li>
                                <li>
                                    <input type="radio" id="a4" name="cart1">
                                    <label for="a4">3kg</label>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="qty-group">
                            {{-- <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus minus-btn">
                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                <input type="button" value="+" class="plus plus-btn">
                            </div> --}}
                            <div class="cart-item-price">{{$data->quantity}} x &#2547;{{number_format($data->price,2)}}</div>
                        </div>
                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                        <button type="button" class="cart-close-btn"><a href="{{route('cart-delete',$data->id)}}" class="remove"><i class="uil uil-multiply"></i></a></button>
                    </div>
                </div>
            @endforeach
            {{-- <div class="cart-item">
                <div class="cart-product-img">
                    <img src="images/product/img-2.jpg" alt="">
                    <div class="offer-badge">6% OFF</div>
                </div>
                <div class="cart-text">
                    <h4>Product Title Here</h4>
                    <div class="cart-radio">
                        <ul class="kggrm-now">
                            <li>
                                <input type="radio" id="a5" name="cart2">
                                <label for="a5">0.50</label>
                            </li>
                            <li>
                                <input type="radio" id="a6" name="cart2">
                                <label for="a6">1kg</label>
                            </li>
                            <li>
                                <input type="radio" id="a7" name="cart2">
                                <label for="a7">2kg</label>
                            </li>
                        </ul>
                    </div>
                    <div class="qty-group">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus minus-btn">
                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                            <input type="button" value="+" class="plus plus-btn">
                        </div>
                        <div class="cart-item-price">$24 <span>$30</span></div>
                    </div>
                    <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="bs-canvas-footer">
        {{-- <div class="cart-total-dil saving-total ">
            <h4>Total Saving</h4>
            <span>$11</span>
        </div> --}}
        <div class="main-total-cart">
            <h2>Total</h2>
            <span>&#2547;{{number_format(Helper::totalCartPrice(),2)}}</span>
            {{-- <span>$35</span> --}}
        </div>
        <div class="checkout-cart">
            {{-- <a href="#" class="promo-code">Have a promocode?</a> --}}
            <a href="{{route('checkout')}}" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
        </div>
    </div>
</div>
@endauth

<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            {{-- <div class="res_main_logo">
                <a href="index.html"><img src="images/dark-logo-1.svg" alt=""></a>
            </div> --}}
            {{-- <div class="main_logo" id="logo">
                <a href="index.html"><img src="images/logo.svg" alt=""></a>
                <a href="index.html"><img class="logo-inverse" src="images/dark-logo.svg" alt=""></a>
            </div> --}}

            <!-- Logo -->
            <div class="main_logo">
                @php
                    $settings=DB::table('settings')->get();
                @endphp                    
                <a href="{{route('home')}}"><img src="@foreach($settings as $data) {{substr($data->logo,16)}} @endforeach" alt="logo"></a>
            </div>
            <!--/ End Logo -->


            <div class="select_location">
                <div class="ui inline dropdown loc-title">
                    <div class="text">
                        <i class="uil uil-apple-alt"></i>
                        All Category
                    </div>
                    <i class="uil uil-angle-down icon__14"></i>
                    <div class="menu dropdown_loc">
                        @foreach(Helper::getAllCategory() as $cat)
                        
                        <div class="item channel_item">
                            <a href="{{route('product-cat',$cat->slug)}}">
                            <i class="uil uil-apple-alt"></i>
                            {{-- <span class="iconify" data-icon="emojione-v1:pot-of-food"></span> --}}
                            {{$cat->title}}
                        </a>
                        </div>
                    
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="search120">
                <div class="ui search">
                    <form method="POST" action="{{route('product.search')}}">
                        @csrf
                    <div class="ui left icon input swdh10">
                        <input class="prompt srch10" name="search" placeholder="Search Products Here" type="search">
                        <i class='uil uil-search-alt icon icon1'></i>
                    </div>
                    </form>
                </div>
            </div>

            

            <div class="header_right">
                <ul>
                    <li>
                        <a class="offer-link"><i class="uil uil-phone-alt"></i>@foreach($settings as $data) {{$data->phone}} @endforeach</a>
                    </li>

                    <li>
                        <a class="offer-link"><i class="uil uil-envelope-alt"></i>@foreach($settings as $data) {{$data->email}} @endforeach</a>
                    </li>

                    {{-- <li class="ui dropdown">
                        <div class="select_location">
                            <div class="ui inline dropdown loc-title">
                                <div class="text">
                                    @php 
                                        $total_prod=0;
                                        $total_amount=0;
                                    @endphp
                                    @if(session('wishlist'))
                                        @foreach(session('wishlist') as $wishlist_items)
                                            @php
                                                $total_prod+=$wishlist_items['quantity'];
                                                $total_amount+=$wishlist_items['amount'];
                                            @endphp
                                        @endforeach
                                    @endif
                                    <a href="{{route('wishlist')}}" class="option_links" title="Wishlist">
                                    <i class='uil uil-heart icon_wishlist'></i>
                                    <span class="noti_count1">{{Helper::wishlistCount()}}</span></a>
                                </div>
                            @auth
                                <div class="menu dropdown_loc" style="max-width: 485px;margin-left: -169px; width: 410px;">
                                    <div class="item channel_item">
                                        <div class="cart-item">
                                            <div class="cart-product-img">
                                                <span>{{count(Helper::getAllProductFromWishlist())}} Items</span>
                                            </div>
                                            <div class="cart-text">
                                                <a href="{{route('wishlist')}}" class="Offer-shop-btn hover-btn" style="position: static; margin-left: 90px;margin-top: -10px;">View Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach(Helper::getAllProductFromWishlist() as $data)
                                        @php
                                            $photo=explode(',',$data->product['photo']);
                                        @endphp
                                        <div class="item channel_item">
                                            <div class="cart-item">
                                                <div class="cart-product-img">
                                                    <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                </div>
                                                <div class="cart-text">
                                                    <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                    <div class="cart-item-price">
                                                        {{$data->quantity}} x ${{number_format($data->price,2)}}
                                                    </div>
                                                    <button type="button" class="cart-close-btn"><a href="{{route('wishlist-delete',$data->id)}}" class="remove"><i class="uil uil-trash-alt"></i></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="item channel_item">
                                        <span>Total</span>
                                        <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                    </div>
                                    <a href="{{route('cart')}}" class="Offer-shop-btn hover-btn" style="position: static; margin-left: 167px; margin-bottom: 20px; margin-top: 10px;">Cart</a>
                                </div>
                             @endauth
                            </div>
                        </div>
                    </li> --}}

                    <li >
                        {{-- <a href="#" class="opts_account">
                            <img src="images/avatar/img-5.jpg" alt="">
                            <span class="user__name">John Doe</span>
                            <i class="uil uil-angle-down"></i>
                        </a>
                        <div class="menu dropdown_account">
                            <div class="night_mode_switch__btn">
                                <a href="#" id="night-mode" class="btn-night-mode">
                                    <i class="uil uil-moon"></i> Night mode
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                            </div> --}}
                            @auth 
                                @if(Auth::user()->role=='admin')
                                    <a href="{{route('admin')}}" class="item channel_item"><i
                                        class="uil uil-apps icon__1"></i>Dashbaord</a>
                                @else 
                                    <a href="{{route('user')}}" class="item channel_item"><i
                                        class="uil uil-apps icon__1"></i>Dashbaord</a>
                                @endif
                                <a href="{{route('user.logout')}}" class="item channel_item"><i
                                    class="uil uil-lock-alt icon__1"></i>Logout</a>

                            @else
                                <a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a>
                            @endauth
                            {{-- <a href="dashboard_overview.html" class="item channel_item"><i
                                    class="uil uil-apps icon__1"></i>Dashbaord</a>
                            <a href="dashboard_my_orders.html" class="item channel_item"><i
                                    class="uil uil-box icon__1"></i>My Orders</a>
                            <a href="dashboard_my_wishlist.html" class="item channel_item"><i
                                    class="uil uil-heart icon__1"></i>My Wishlist</a>
                            <a href="dashboard_my_wallet.html" class="item channel_item"><i
                                    class="uil uil-usd-circle icon__1"></i>My Wallet</a>
                            <a href="dashboard_my_addresses.html" class="item channel_item"><i
                                    class="uil uil-location-point icon__1"></i>My Address</a>
                            <a href="offers.html" class="item channel_item"><i
                                    class="uil uil-gift icon__1"></i>Offers</a>
                            <a href="faq.html" class="item channel_item"><i
                                    class="uil uil-info-circle icon__1"></i>Faq</a>
                            <a href="sign_in.html" class="item channel_item"><i
                                    class="uil uil-lock-alt icon__1"></i>Logout</a> --}}
                        {{-- </div> --}}
                    </li>
                </ul>
            </div>
            
             {{-- wishlist --}}

        </div>
    </div>
    <div class="sub-header-group">
        <div class="sub-header">
            <div class="ui dropdown">
                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model"
                    title="Categories"><span class="cate__icon">Enjoy Our Foods</span></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button"
                        data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="{{route('home')}}" class="nav-link active" title="Home">Home</a></li>
                            
                            <li class="nav-item"><a href="{{route('product-grids')}}" class="nav-link"
                                    title="Featured Products">Products</a></li>

                                    <li class="nav-item"><a href="{{route('about-us')}}" class="nav-link">About Us</a></li>
                                    {{-- <li class="nav-item">
                                        <div class="ui icon top left dropdown nav__menu">
                                            <a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
                                            <div class="menu dropdown_page">
                                                <a href="dashboard_overview.html"
                                                    class="item channel_item page__links">Account</a>
                                                <a href="about_us.html" class="item channel_item page__links">About Us</a>
                                                <a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
                                                <a href="single_product_view.html"
                                                    class="item channel_item page__links">Single Product View</a>
                                                <a href="checkout.html" class="item channel_item page__links">Checkout</a>
                                                <a href="request_product.html" class="item channel_item page__links">Product
                                                    Request</a>
                                                <a href="order_placed.html" class="item channel_item page__links">Order
                                                    Placed</a>
                                                <a href="bill.html" class="item channel_item page__links">Bill Slip</a>
                                                <a href="sign_in.html" class="item channel_item page__links">Sign In</a>
                                                <a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
                                                <a href="forgot_password.html" class="item channel_item page__links">Forgot
                                                    Password</a>
                                                <a href="contact_us.html" class="item channel_item page__links">Contact
                                                    Us</a>
                                            </div>
                                        </div>
                                    </li> --}}


                                    {{-- <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li> --}}
                            {{-- <li class="nav-item">
                                <div class="ui icon top left dropdown nav__menu">
                                    <a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
                                    <div class="menu dropdown_page">
                                        <a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
                                        <a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog
                                            Two No Sidebar</a>
                                        <a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog
                                            with Left Sidebar</a>
                                        <a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog
                                            with Right Sidebar</a>
                                        <a href="blog_detail_view.html" class="item channel_item page__links">Blog
                                            Detail View</a>
                                        <a href="blog_left_sidebar_single_view.html"
                                            class="item channel_item page__links">Blog Detail View with Sidebar</a>
                                    </div>
                                </div>
                            </li> --}}



                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link" title="Contact">Contact
                                    Us</a></li>

                                    
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i
                        class="uil uil-apps"></i></a>
            </div>
            {{-- <div class="sinlge-bar shopping">
                <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                <!-- Shopping Item -->
                @auth
                    <div class="shopping-item">
                        <div class="dropdown-cart-header">
                            <span>{{count(Helper::getAllProductFromCart())}} Items</span>
                            <a href="{{route('cart')}}">View Cart</a>
                        </div>
                        <ul class="shopping-list">
                            {{-- {{Helper::getAllProductFromCart()}} -}}
                                @foreach(Helper::getAllProductFromCart() as $data)
                                        @php
                                            $photo=explode(',',$data->product['photo']);
                                        @endphp
                                        <li>
                                            <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                            <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                            <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                        </li>
                                @endforeach
                        </ul>
                        <div class="bottom">
                            <div class="total">
                                <span>Total</span>
                                <span class="total-amount">${{number_format(Helper::totalCartPrice(),2)}}</span>
                            </div>
                            <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                        </div>
                    </div>
                @endauth
                <!--/ End Shopping Item -->
            </div> --}}
            <div class="header_cart order-1">
                @auth
                    <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart">
                        <i class="uil uil-shopping-cart-alt"></i>
                        <span>Cart</span>
                        <ins>{{count(Helper::getAllProductFromCart())}}</ins>
                        <i class="uil uil-angle-down"></i>
                    </a>
                @endauth
            </div>
            <div class="search__icon order-1">
                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model"
                    title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>
