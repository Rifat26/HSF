@auth
<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
    <div class="bs-canvas-header side-cart-header p-3 ">
        <div class="d-inline-block  main-cart-title">My Cart <span>({{count(Helper::getAllProductFromCart())}} Items)</span></div>
        <button type="button" class="bs-canvas-close close" aria-label="Close"><i
                class="uil uil-multiply"></i></button>
    </div>
    <div class="bs-canvas-body">
       
        <div class="side-cart-items">
            @foreach(Helper::getAllProductFromCart() as $data)
                @php
                    $photo=explode(',',substr($data->product['photo'],16));
                @endphp
                <div class="cart-item">
                    <div class="cart-product-img">
                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                        
                    </div>
                    <div class="cart-text">
                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                        
                        <div class="qty-group">
                            
                            <div class="cart-item-price">{{$data->quantity}} x &#2547;{{number_format($data->price,2)}}</div>
                        </div>
                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                        <button type="button" class="cart-close-btn"><a href="{{route('cart-delete',$data->id)}}" class="remove"><i class="uil uil-multiply"></i></a></button>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>
    <div class="bs-canvas-footer">
        
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
                    <li >
                        
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
