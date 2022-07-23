@extends('frontend.layouts.master')

    @section('title','Home Food Service || Register Page')

        @section('main-content')
                        {{-- <!-- Breadcrumbs -->
                        <div class="breadcrumbs">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="bread-inner">
                                            <ul class="bread-list">
                                                <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                                                <li class="active"><a href="javascript:void(0);">Register</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Breadcrumbs --> --}}
                                
                        {{-- <!-- Shop Login -->
                        
                        <!--/ End Login -->
                    @endsection

                    @push('styles')
                    <style>
                        .shop.login .form .btn{
                            margin-right:0;
                        }
                        .btn-facebook{
                            background:#39579A;
                        }
                        .btn-facebook:hover{
                            background:#073088 !important;
                        }
                        .btn-github{
                            background:#444444;
                            color:white;
                        }
                        .btn-github:hover{
                            background:black !important;
                        }
                        .btn-google{
                            background:#ea4335;
                            color:white;
                        }
                        .btn-google:hover{
                            background:rgb(243, 26, 26) !important;
                        }
                    </style>
                    @endpush --}}


                    <div class="sign-inup">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="sign-form">
                                        <div class="sign-inner">
                                            <div class="form-dt">
                                                <div class="form-inpts checout-address-step">
                                                    <form class="form" method="post" action="{{route('register.submit')}}">
                                                        @csrf
                                                        <div class="form-title">
                                                            <h6>Sign Up</h6>
                                                        </div>
                                                        <div class="form-group pos_rel">
                                                            {{-- <input id="full[name]" name="fullname" type="text" placeholder="Full name"
                                                                class="form-control lgn_input" required=""> --}}
                                                            <input class="form-control lgn_input" type="text" name="name" placeholder="Full Name" required="required" value="{{old('name')}}">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            <i class="uil uil-user-circle lgn_icon"></i>
                                                        </div>
                                                        <div class="form-group pos_rel">
                                                            {{-- <input id="email[address]" name="emailaddress" type="email"
                                                                placeholder="Email Address" class="form-control lgn_input" required=""> --}}
                                                            <input class="form-control lgn_input" type="text" name="email" placeholder="Email Address" required="required" value="{{old('email')}}">
                                                            @error('email')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            <i class="uil uil-envelope lgn_icon"></i>
                                                        </div>
                                                        <div class="form-group pos_rel">
                                                            {{-- <input id="password1" name="password1" type="password"
                                                                placeholder="New Password" class="form-control lgn_input" required=""> --}}
                                                            <input class="form-control lgn_input" type="password" name="password" placeholder="New Password" required="required" value="{{old('password')}}">
                                                            @error('password')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            <i class="uil uil-padlock lgn_icon"></i>
                                                        </div>
                                                        <div class="form-group pos_rel">
                                                            {{-- <input id="password1" name="password1" type="password"
                                                                placeholder="New Password" class="form-control lgn_input" required=""> --}}
                                                            <input class="form-control lgn_input" type="password" name="password_confirmation" placeholder="Confirm Password" required="required" value="{{old('password_confirmation')}}">
                                                            @error('password_confirmation')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            <i class="uil uil-padlock lgn_icon"></i>
                                                        </div>
                                                        <button class="login-btn hover-btn btn" type="submit">Sign Up Now</button>
                                                    </form>
                                                </div>
                                                <div class="signup-link">
                                                    <p>I have an account? - <a href="{{route('login.form')}}">Sign In Now</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="copyright-text text-center mt-3">
                                        <i class="uil uil-copyright"></i>Copyright 2022 <b>MRR</b> . All rights reserved
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
        @endsection