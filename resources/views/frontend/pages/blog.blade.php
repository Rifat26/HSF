@extends('frontend.layouts.master')

@section('title','E-SHOP || Blog Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Blog Grid Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
        
    <!-- Start Blog Single -->
    <div class="wrapper">
        {{-- <div class="default-dt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="default_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_default  justify-content-center">
                                    <a class="nav-item nav-link" href="about_us.html">About</a>
                                    <a class="nav-item nav-link active" href="our_blog.html">Blog</a>
                                    <a class="nav-item nav-link" href="career.html">Careers</a>
                                    <a class="nav-item nav-link" href="press.html">Press</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Insights, ideas, and stories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="blog-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="pdpt-bg-left mt-0">
                            <div class="pdpt-title">
                                <h4>Recently Posts</h4>

                            </div>
                            <ul class="top-posts">
                                @foreach($recent_posts as $post)
                                    <li>
                                        <div class="blog-top-item">
                                            <a href="#" class="top-post-link">{{$post->title}}</a>
                                            @php 
                                              $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                                            @endphp
                                            <span class="blog-time">{{$post->created_at->format('d M, y')}}</span>
                                            <span><i class="fa fa-user" aria-hidden="true"></i> 
                                                @foreach($author_info as $data)
                                                    @if($data->name)
                                                        {{$data->name}}
                                                    @else
                                                        Anonymous
                                                    @endif
                                                @endforeach
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="pdpt-bg-left mb-30">
                            <div class="pdpt-title">
                                <h4>Contact With Us</h4>
                            </div>
                            <div class="cntct-social">
                                <ul class="team-social">
                                    <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-8 col-md-7">
                        @foreach($posts as $post)
                            <div class="blog-item">
                                <a href="#" class="blog-img">
                                    <img src="{{$post->photo}}" alt="{{$post->photo}}">
                                    <div class="blog-cate-badge">Food & Life Style</div>
                                </a>
                                <div class="date-icons-group">
                                    @php 
                                        $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                                    @endphp
                                    <div class="blog-time sz-14">{{$post->created_at->format('d M, Y. D')}}</div>
                                    <ul class="like-share-icons">
                                        <li>
                                            <a> <i class="fa fa-user" aria-hidden="true"></i>
                                                <span>
                                                
                                                @foreach($author_info as $data)
                                                    @if($data->name)
                                                        {{$data->name}}
                                                    @else
                                                        Anonymous
                                                    @endif
                                                @endforeach</span>
                                            {{-- <a href="#" class="like-share"><i
                                                    class="uil uil-thumbs-up"></i><span>5</span></a> --}}
                                        </li>
                                        {{-- <li>
                                            <a href="#" class="like-share"><i class="uil uil-share-alt"></i></a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="blog-detail">
                                    
                                    <h4>{{$post->title}}</h4>
                                    <p>{!! html_entity_decode($post->summary) !!}</p>
                                    <a href="{{route('blog.detail',$post->slug)}}">Read More</a>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="blog-more-btn">
                            <a href="#" class="blog-btn hover-btn">More View</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Blog Single -->
@endsection
@push('styles')
    <style>
        .pagination{
            display:inline-flex;
        }
    </style>

@endpush