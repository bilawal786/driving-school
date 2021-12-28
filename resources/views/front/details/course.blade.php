@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')

    <div class="sidebar col-lg-4 col-12">
        <div class="single-sidebar">
            <h5 class="sidebar-title">about the blog</h5>
            <div class="about-sidebar">
                <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,making it over 2000 years old. Richard McClintock.</p>
            </div>
        </div>
        <div class="single-sidebar">
            <h5 class="sidebar-title">Categories</h5>
            <div class="category-sidebar">
                <ul>
                    <li><a href="#">Business (22)</a></li>
                    <li><a href="#">Corporate (17)</a></li>
                    <li><a href="#">Creative (14)</a></li>
                    <li><a href="#">Design (19)</a></li>
                    <li><a href="#">Development (13)</a></li>
                    <li><a href="#">Technology (12)</a></li>
                </ul>
            </div>
        </div>
        <div class="single-sidebar">
            <h5 class="sidebar-title">Latest Blog</h5>
            <div class="latest-blog-sidebar">
                <div class="sin-blog fix">
                    <a href="#" class="image float-left"><img src="img/sidebar-blog/1.jpg" alt="" /></a>
                    <div class="content fix">
                        <a href="#">random text. It has roots in a of classical Latin literature</a>
                        <p><i class="icofont icofont-calendar"></i> july 15, 2016</p>
                    </div>
                </div>
                <div class="sin-blog fix">
                    <a href="#" class="image float-left"><img src="img/sidebar-blog/2.jpg" alt="" /></a>
                    <div class="content fix">
                        <a href="#">random text. It has roots in a of classical Latin literature</a>
                        <p><i class="icofont icofont-calendar"></i> july 15, 2016</p>
                    </div>
                </div>
                <div class="sin-blog fix">
                    <a href="#" class="image float-left"><img src="img/sidebar-blog/3.jpg" alt="" /></a>
                    <div class="content fix">
                        <a href="#">random text. It has roots in a of classical Latin literature</a>
                        <p><i class="icofont icofont-calendar"></i> july 15, 2016</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-sidebar">
            <h5 class="sidebar-title">Tags</h5>
            <div class="tags-sidebar fix">
                <a href="#">Corporate</a>
                <a href="#">Business</a>
                <a href="#">Creative</a>
                <a href="#">Web</a>
                <a href="#">Photoshop</a>
                <a href="#">Design</a>
                <a href="#">Development</a>
                <a href="#">UX</a>
            </div>
        </div>
    </div>

@endsection
