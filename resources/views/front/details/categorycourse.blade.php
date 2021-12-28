@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')

    <!-- Contatc Area
============================================ -->

    <div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70" style="margin-top: 50px">
        <div class="container pb-90 pt-90">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mt-45 mb-45">
                    <h3 class="heading" >CATÉGORIE DE COURS</h3>
                    <div class="excerpt">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p> -->
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <!-- Contact Info -->
                <div class="contact-info col-lg-12 col-sm-12 col-12">
                    <div class="single-info text-left fix">
                        <div class="icon"><i class="icofont icofont-document"></i></div>
                        <div class="content fix">
                            @if($categoryCourse->category1==$category)
                                <h5 style="font-size: 30px;"><!--call us-->{{$categoryCourse->category1 ?? ''}}</h5>
                                <p style="font-size: 20px;">{!! $categoryCourse->description1 ?? '' !!}</p>
                            @elseif($categoryCourse->category2==$category)
                                <h5 style="font-size: 30px;"><!--call us-->{{$categoryCourse->category2 ?? ''}}</h5>
                                <p style="font-size: 20px;">{!! $categoryCourse->description2 ?? '' !!}</p>
                            @elseif($categoryCourse->category3==$category)
                                <h5 style="font-size: 30px;"><!--call us-->{{$categoryCourse->category3 ?? ''}}</h5>
                                <p style="font-size: 20px;">{!! $categoryCourse->description3 ?? '' !!}</p>
                            @elseif($categoryCourse->category4==$category)
                                <h5 style="font-size: 30px;"><!--call us-->{{$categoryCourse->category4 ?? ''}}</h5>
                                <p style="font-size: 20px;">{!! $categoryCourse->description4 ?? '' !!}</p>


                            @endif
                        </div>
                    </div>


                </div>
                <!-- Contact Form -->

            </div>
        </div>

    </div>

@endsection
