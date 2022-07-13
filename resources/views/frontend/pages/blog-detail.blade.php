@extends('frontend.layouts.master')

@section('title','E-TECH || Blog Detail page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Blog Single Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
        
    <!-- Start Blog Single -->
    <div class="wrapper">
       
        <div class="blog-dt-vw banner-blog banner.visible parallax">
            <div class="blog-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>{{$post->title}}</h1>
                            <div class="extra-info">
                                <span class="entry-date">{{$post->created_at->format('M d, Y')}}</span>
                                <div class="single-post-cat">
                                    <a href="#">Food &amp; Lifestyle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-single-dts-text">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bb-des12">
                            <div class="blog-des-dt142">
                                <p>{!! ($post->description) !!}</p>
                                
                                
                            </div>
                            <div class="date-icons-group vew1458">
                                <div class="blog-time sz-14"></div>
                                <ul class="like-share-icons">
                                    <li>
                                        <a href="#" class="like-share ss18"><i
                                                class="uil uil-thumbs-up"></i><span>5</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="like-share ss18"><i class="uil uil-share-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="all-comment">
                                <h2>Comments 2</h2>
                                <div class="cmmnt_item">
                                    <div class="cmmnt_usr_dt">
                                        <img src="images/avatar/img-1.jpg" alt="">
                                        <div class="rv1458">
                                            <h4 class="tutor_name1">John Doe</h4>
                                            <span class="time_145">2 hour ago</span>
                                        </div>
                                    </div>
                                    <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum.
                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia,
                                        nunc sit amet tincidunt venenatis.</p>
                                </div>
                                <div class="cmmnt_item">
                                    <div class="cmmnt_usr_dt">
                                        <img src="images/avatar/img-8.jpg" alt="">
                                        <div class="rv1458">
                                            <h4 class="tutor_name1">Rock Smith</h4>
                                            <span class="time_145">3 hour ago</span>
                                        </div>
                                    </div>
                                    <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum.
                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia,
                                        nunc sit amet tincidunt venenatis.</p>
                                </div>
                            </div>
                            <div class="leave-comment">
                                <h2>Leave a Reply</h2>
                                <span>Your email address and phone number will not be published. Required fields are
                                    marked *</span>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group mt-1">
                                                <label class="control-label">Full Name*</label>
                                                <div class="ui search focus">
                                                    <div class="ui left icon input swdh11 swdh19">
                                                        <input class="prompt srch_explore" type="text" name="fullname"
                                                            value="" id="full[name]" required="" maxlength="64"
                                                            placeholder="Your Full Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mt-1">
                                                <label class="control-label">Email Address*</label>
                                                <div class="ui search focus">
                                                    <div class="ui left icon input swdh11 swdh19">
                                                        <input class="prompt srch_explore" type="email"
                                                            name="emailaddress" value="" id="email[address]" required=""
                                                            placeholder="Your Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mt-1">
                                                <label class="control-label">Phone Number*</label>
                                                <div class="ui search focus">
                                                    <div class="ui left icon input swdh11 swdh19">
                                                        <input class="prompt srch_explore" type="text"
                                                            name="phonenumber" value="" id="phone[number]" required=""
                                                            placeholder="Your Phone Number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-1">
                                                <div class="field">
                                                    <label class="control-label">Add Comment*</label>
                                                    <textarea rows="2" class="form-control"
                                                        placeholder="Add your comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="post-btn hover-btn" type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Blog Single -->
@endsection
@push('styles')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
@endpush
@push('scripts')
<script>
$(document).ready(function(){
    
    (function($) {
        "use strict";

        $('.btn-reply.reply').click(function(e){
            e.preventDefault();
            $('.btn-reply.reply').show();

            $('.comment_btn.comment').hide();
            $('.comment_btn.reply').show();

            $(this).hide();
            $('.btn-reply.cancel').hide();
            $(this).siblings('.btn-reply.cancel').show();

            var parent_id = $(this).data('id');
            var html = $('#commentForm');
            $( html).find('#parent_id').val(parent_id);
            $('#commentFormContainer').hide();
            $(this).parents('.comment-list').append(html).fadeIn('slow').addClass('appended');
          });  

        $('.comment-list').on('click','.btn-reply.cancel',function(e){
            e.preventDefault();
            $(this).hide();
            $('.btn-reply.reply').show();

            $('.comment_btn.reply').hide();
            $('.comment_btn.comment').show();

            $('#commentFormContainer').show();
            var html = $('#commentForm');
            $( html).find('#parent_id').val('');

            $('#commentFormContainer').append(html);
        });
        
 })(jQuery)
})
</script>
@endpush