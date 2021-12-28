@extends('front.master')
@section('content')
    <!-- Hero Slide Area
    ============================================ -->
    <div id="hero-area" class="hero-slider-area">
        <div id="hero-slider" class="nivoSlider slider-image">
            <img src="{{asset($website->simage1 ?? '')}}" alt="main slider" title="#htmlcaption1"/>
            <img src="{{asset($website->simage2 ?? '')}}" alt="main slider" title="#htmlcaption2"/>
            <img src="{{asset($website->simage3 ?? '')}}" alt="main slider" title="#htmlcaption3"/>
        </div>
        <div id="htmlcaption1" class="nivo-html-caption">
            <div class="slide-table container">

            </div>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption">
            <div class="slide-table container">

            </div>
        </div>
        <div id="htmlcaption3" class="nivo-html-caption">
            <div class="slide-table container">

        </div>
    </div>



  <!-- ABou us Area
    ============================================ -->


    </div>
    <div id="about-area" class="course-area bg-gray pt-90 pb-60" style="background-color:#ffffff;">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive"  src="{{ asset($about->image1 ?? ' ')  }}" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="heading margin_top_30">
                        <h2 class="heading"><!--About our shop--> À propos de nous</h2>
                    </div>
                    <div class="full margin_top_20">
                        {!!$about->description !!}
                    </div>
                    <div class="full margin_top_50" >
                        <img class="img-responsive" src="{{ asset($about->image2 ?? ' ')  }}" alt="#" />
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Course Area
    ============================================ -->
    <div id="course-area" class="course-area bg-gray pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h3 class="heading"><!--course category-->CATÉGORIE DE COURS</h3>
                    <div class="excerpt">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p> -->
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <!-- Course Wrapper -->
            <div class="course-wrapper row">
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <a href="{{route('categorycourse.detials',['category'=>$courseCategory->category1])}}"><div class="course-item text-center">
                            <i class="icofont icofont-car-alt-4"></i>
                            <h4 ><!--normal driving-->{{Str::limit($courseCategory->category1, 20)}}</h4>
                            <p>{{Str::limit($courseCategory->description1, 80)}} </p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <a href="{{route('categorycourse.detials',['category'=>$courseCategory->category2])}}"><div class="course-item text-center">
                            <i class="icofont icofont-ambulance-cross"></i>
                            <h4 ><!--defensive-->{{Str::limit($courseCategory->category2, 20)}}</h4>
                            <p>{{Str::limit($courseCategory->description2, 80)}} </p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <a href="{{route('categorycourse.detials',['category'=>$courseCategory->category3])}}"><div class="course-item text-center">
                            <i class="icofont icofont-fast-delivery"></i>
                            <h4 ><!--power booster-->{{Str::limit($courseCategory->category3, 20)}}</h4>
                            <p>{{Str::limit($courseCategory->description3, 80)}} </p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <a href="{{route('categorycourse.detials',['category'=>$courseCategory->category4])}}"><div class="course-item text-center">
                            <i class="icofont icofont-rocket-alt-2"></i>
                            <h4 ><!--crash level-->{{$courseCategory->category4}}</h4>
                            <p>{{Str::limit($courseCategory->description4, 80)}} </p>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area
   ============================================ -->
    <!-- Feature Area
    ============================================ -->
    <div id="feature-area" class="feature-area bg-white pt-90 pb-90">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h3 class="heading"><!--our features-->NOS SERVICES</h3>

                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <!-- Left Feature -->
                <div class="feature-wrapper feature-left text-right col-lg-4 col-12">
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-file-spreadsheet"></i></div>
                        <div class="text fix">
                            <h4><!--Quick License-->{{$feature->title1 ?? ''}}</h4>
                            <p> {!! Str::limit($feature->description1, 42) !!}plus de détail
                            </p>
                            <a href="{{route('fetaure.detials',['title'=>$feature->title1])}}" style="color: #DC143C">Plus de détail</a>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-car-alt-4"></i></div>
                        <div class="text fix">
                            <h4><!--Unlimited Car Support-->{{$feature->title2 ?? ''}}</h4>
                            <p> {!! Str::limit($feature->description2, 42 )!!}
                            </p>
                            <a href="{{route('fetaure.detials',['title'=>$feature->title2])}}" style="color: #DC143C">Plus de détail</a>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-video-alt"></i></div>
                        <div class="text fix">
                            <h4>{{$feature->title3 ?? ''}}</h4>
                            <p>{!! Str::limit($feature->description3, 42) !!}
                            </p>
                            <a href="{{route('fetaure.detials',['title'=>$feature->title3])}}" style="color: #DC143C">Plus de détail</a>
                        </div>
                    </div>
                </div>
                <!-- Feature Image -->
                <div class="feature-image text-center col-lg-4 col-12">
                    <img src="{{asset($feature->image ?? '')}}" alt="feature" />
                </div>
                <!-- Right Feature -->
                <div class="feature-wrapper feature-right text-left col-lg-4 col-12">
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-man-in-glasses"></i></div>
                        <div class="text fix">
                            <h4><!--Experience Instructors-->{{$feature->title4 ?? ''}}</h4>
                            <p> {!! Str::limit($feature->description4, 42) !!}
                            </p>
                            <a href="{{route('fetaure.detials',['title'=>$feature->title4])}}" style="color: #DC143C">Plus de détail</a>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-clock-time"></i></div>
                        <div class="text fix">
                            <h4>{{$feature->title5 ?? ''}}</h4>
                            <p> {!! Str::limit($feature->description5, 42) !!}
                            </p>
                            <a href="{{route('fetaure.detials',['title'=>$feature->title5])}}" style="color: #DC143C">Plus de détail</a>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-direction-sign"></i></div>
                         <div class="text fix">
                            <h4>{{$feature->title6 ?? ''}}</h4>
                            <p> {!! Str::limit($feature->description6, 41) !!}
                            </p>
                             <a href="{{route('fetaure.detials',['title'=>$feature->title6])}}" style="color: #DC143C">Plus de détail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="video-area" class="video-area overlay overlay-black overlay-50">
        <div class="container">
            <div class="row">
                <div class="video-content text-center col-12">
                    <a class="video-popup" href="https://www.youtube.com/watch?v={{$video->video ?? ''}}"><i class="icofont icofont-play-alt-2"></i></a>
                    <h3><!--our teaching process-->{{$video->title ?? ''}}</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Courser Enroll Area
    ',
    ============================================ -->
    <div id="pricing-area" class="pricing-area  pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title title-white text-center col-12 mb-45">
                    <h3 class="heading"><!--your Course Enroll plan-->Inscription aux Cours</h3>
                    <div class="excerpt">
                        <p>{!!$website->courseDescription ?? ' '!!}</p>
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
            @foreach($courseEnroll as $key => $row)
            @if($key+1==1)
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="single-pricing  active text-center">
                        <div class="pricing-head">
                            <h4><!--basic-->{{$row->courseTitle ?? ''}}</h4>
                        </div>
                        <div class="pricing-price">
                            <h2>{{$row->price ?? ''}}€</h2>
                        </div>
                        <ul class="pricing-details">
                            <li><!--2 Month Course-->{{$row->courseDetails1 ?? ''}}</li>
                            <li><!--3 Hours Per Day-->{{$row->courseDetails2 ?? ''}}</li>
                            <li><!--Weekly 1 Test-->{{$row->courseDetails3 ?? ''}} </li>
                            <li><!--20 Video Classes-->{{$row->courseDetails4 ?? ''}}</li>
                            <li><!--Driving Licence-->{{$row->courseDetails5 ?? ''}}</li>
                        </ul>
                        @auth
                        <a href="{{route('check.out', ['id' => $row->id])}}" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAIT</a>
                        @else
                        <a href="{{route('front.login')}}" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAIT</a>
                        @endauth
                    </div>
                </div>

                @else
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="single-pricing   text-center">
                        <div class="pricing-head">
                            <h4><!--basic-->{{$row->courseTitle ?? ''}}</h4>
                        </div>
                        <div class="pricing-price">
                            <h2><span></span>{{$row->price ?? ''}}€</h2>
                        </div>
                        <ul class="pricing-details">
                            <li><!--2 Month Course-->{{$row->courseDetails1 ?? ''}}</li>
                            <li><!--3 Hours Per Day-->{{$row->courseDetails2 ?? ''}}</li>
                            <li><!--Weekly 1 Test-->{{$row->courseDetails3 ?? ''}} </li>
                            <li><!--20 Video Classes-->{{$row->courseDetails4 ?? ''}}</li>
                            <li><!--Driving Licence-->{{$row->courseDetails5 ?? ''}}</li>
                        </ul>
                        @auth
                        <a href="{{route('check.out', ['id' => $row->id])}}" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAIT</a>
                        @else
                        <a href="{{route('front.login')}}" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAIT</a>
                        @endauth
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Offers us Area
    ============================================ -->

    <div id="about-area" class="course-area bg-gray pt-90 pb-60">
        <div class="container" style="background-color:#DC143C; padding: 40px; border-radius: 50px">
            <!-- Section Title -->
            <div class="row">
                <div class="col-md-6">
                <a href="{{$offers->link ?? ''}}" > <img style="width: 100%; border-radius: 50px" class="img-responsive"  src="{{ asset($offers->image ?? ' ')  }}" alt="#" /></a>
                </div>
                <div class="col-md-6">
                    <div class="heading margin_top_30" style="position: absolute; top: 80px">
                        <h1 class="heading" style="text-align: left; color: white; font-size: 60px;">{{$offers->title ??''}}</h1>
                        <br>
                        <h1 class="heading" style="text-align: left; color: white; font-size: 60px;"><del>{{$offers->oldPrice ??''}}€</del>   {{$offers->newPrice ??''}}€</h1>
                        <br>
                        <h1 class="heading" style="text-align: left; color: white; font-size: 60px;" id="demotime"></h1>
                    </div>
                    </div>

                </div>
            </div>

            </div>
    <!-- Instructor Area
    ============================================ -->
    <div id="instructor-area" class="instructor-area bg-gray pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h3 class="heading">INSTRUCTEUR</h3>
                    <div class="excerpt">

                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <!-- Instructor Tab Content -->
                    <div class="tab-content">
                    @foreach($instructor as $key=> $row)

                    @if($key+1 == 1)
                        <div class="tab-pane fade show active" id="instructor-{{$row->id}}">
                            <div class="row">
                                <div class="instructor-details text-left col-lg-7 col-12">
                                    <h4 class="instructor-name">{{$row->name ?? ''}}</h4>
                                    <h5 class="instructor-title">{{$row->job ?? ''}}</h5>
                                    <p>{!! $row->description2 ?? '' !!}</p>
{{--                                    <div class="instructor-social fix">--}}
{{--                                    <a href="{{$row->facebook}}"><i class="icofont icofont-social-facebook"></i></a>--}}
{{--                                    <a href="{{$row->instagram}}"><i class="icofont icofont-social-instagram"></i></a>--}}
{{--                                        --}}
{{--                                    </div>--}}
                                </div>
                                <div class="instructor-image col-lg-5 col-md-6 col-12">
                                    <img src="{{asset($row->image1 ?? '')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    @else
                    <div class="tab-pane fade show " id="instructor-{{$row->id}}">
                            <div class="row">
                                <div class="instructor-details text-left col-lg-7 col-12">
                                    <h4 class="instructor-name">{{$row->name ?? ''}}</h4>
                                    <h5 class="instructor-title">{{$row->job ?? ''}}</h5>
                                    <p>{!! $row->description2 ?? '' !!}</p>
                                    <div class="instructor-social fix">
                                    <a href="{{$row->facebook}}"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="{{$row->instagram}}"><i class="icofont icofont-social-instagram"></i></a>

                                    </div>
                                </div>
                                <div class="instructor-image col-lg-5 col-md-6 col-12">
                                    <img src="{{asset($row->image1 ?? '')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    @endif

                    @endforeach

                    </div>
                    <!-- Instructor Tab List -->
                    <ul class="nav instructor-tab-list fix">
                    @foreach($instructor as $key=>$row)

                        @if($key+1 == 1)
                        <li class="active"><a href="#instructor-{{$row->id ??''}}" data-toggle="tab"><img src="{{asset($row->image2 ?? '')}}" alt="" /></a></li>
                        @else
                        <li><a href="#instructor-{{$row->id ?? ''}}" data-toggle="tab"><img src="{{asset($row->image2 ?? '')}}" alt="" /></a></li>
                        @endif
                    @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Area
    ============================================ -->
    <div id="gallery-area" class="gallery-area bg-gray pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h3 class="heading">GALERIE D'OR</h3>
                    <div class="excerpt">
                        <p>{!!$galery->description ?? '' !!}</p>
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <!-- Gallery Filter -->
            <!-- <div class="gallery-filter text-center">
                <button class="active" data-filter="*">allTOUS</button>
                <button data-filter=".cars">carsVOITURES</button>
                <button data-filter=".students">studentsÉTUDIANTS</button>
                <button data-filter=".classroom">classroomSALLE DE COURS</button>
                <button data-filter=".exam">examEXAMEN</button>
            </div> -->
            <!-- Gallery Grid -->
            <div class="gallery-grid row">
                <div class="gallery-item cars col-lg-3 col-md-4 col-12">
                    <a href="{{asset($galery->image1 ?? '')}}" class="gallery-image image-popup">
                        <img src="{{asset($galery->image1 ?? '')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item cars exam col-lg-3 col-md-4 col-12">
                    <a href="{{asset($galery->image2 ?? '')}}" class="gallery-image image-popup">
                        <img src="{{asset($galery->image2 ?? '')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item classroom col-lg-3 col-md-4 col-12">
                    <a href="{{asset($galery->image3 ?? '')}}" class="gallery-image image-popup">
                        <img src="{{asset($galery->image3 ?? '')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item cars students exam col-lg-3 col-md-4 col-12">
                    <a href="{{asset($galery->image4 ?? '')}}" class="gallery-image image-popup">
                        <img src="{{asset($galery->image4 ?? '')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item cars students col-lg-3 col-md-4 col-12">
                    <a href="{{asset($galery->image5 ?? '')}}" class="gallery-image image-popup">
                        <img src="{{asset($galery->image5 ?? '')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item students classroom col-lg-3 col-md-4 col-12">
                    <a href="{{asset($galery->image6 ?? '')}}" class="gallery-image image-popup">
                        <img src="{{asset($galery->image6 ?? '')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Area
    ============================================ -->
    <div id="testimonial-area" class="testimonial-area overlay overlay-white overlay-80 text-center pt-90 pb-90">
        <div class="container">

            <div class="row">


                <div class="col-lg-8 col-12 mx-auto">
                    <!-- Testimonial Image Slider -->
                    <div class="ti-slider mb-40">
                    @foreach($jobber as $row)
                        <div class="single-slide"><div class="image fix"><img src="{{asset($row->image ?? '')}}" alt="" /></div></div>
                    @endforeach
                    </div>
                    <!-- Testimonial Content Slider -->

                    <div class="tc-slider">
                    @foreach($jobber as $row)
                        <div class="single-slide">

                        <h5>{{$row->name}}</h5>
                            <span>{{$row->job}}</span>
                            <p>{{$row->description}}</p>

                        </div>
                    @endforeach

                    </div>

                </div>

            </div>
        </div>
        <!-- Slider Arrows -->
        <button class="ts-arrows ts-prev"><i class="icofont icofont-caret-left"></i></button>
        <button class="ts-arrows ts-next"><i class="icofont icofont-caret-right"></i></button>
    </div>


    <!-- FAQ Area
    ============================================ -->
    <div id="faq-area" class="faq-area bg-white pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h3 class="heading">QUESTIONS FRÉQUEMMENT POSÉES</h3>
                    <div class="excerpt">
                        <p>{!! $faq->description ?? '' !!}</p>
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="panel-group" id="faq">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="true" href="#faq-1">{{$faq->question1 ?? ''}}</a></h4>
                            </div>
                            <div id="faq-1" class="panel-collapse collapse show" data-parent="#faq">
                                <div class="panel-body">
                                    <p>{{$faq->answer1 ?? ''}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-2">{{$faq->question2 ?? ''}}</a></h4>
                            </div>
                            <div id="faq-2" class="panel-collapse collapse" data-parent="#faq">
                                <div class="panel-body">
                                    <p>{{$faq->answer2 ?? ''}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-3">{{$faq->question3 ?? ''}}</a></h4>
                            </div>
                            <div id="faq-3" class="panel-collapse collapse" data-parent="#faq">
                                <div class="panel-body">
                                <p>{{$faq->answer3 ?? ''}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-4">{{$faq->question4 ?? ''}}</a></h4>
                            </div>
                            <div id="faq-4" class="panel-collapse collapse" data-parent="#faq">
                                <div class="panel-body">
                                <p>{{$faq->answer4 ?? ''}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-image col-lg-6 col-12">
                    <img src="{{asset($faq->image)}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Area
    ============================================ -->
    <!-- <div id="cta-area" class="cta-area pb-40 pt-40">
        <div class="container">
            <div class="row">
                <div class="call-to-action text-left col-lg-10 col-12 mx-auto">
                    <h3>try to get our amazing free lesson</h3>
                    <a href="#" class="btn transparent ">get  lesson</a>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Funfact Area
    ============================================ -->
    <div class="funfact-area overlay overlay-white overlay-80 pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-hat-alt"></i>
                    <h1 class="counter plus">{{$funfact->counter1}}</h1>
                    <p><!--graduted from here-->{{$funfact->title1}}</p>
                </div>
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-user-suited"></i>
                    <h1 class="counter">{{$funfact->counter2}}</h1>
                    <p><!--teachers number-->{{$funfact->title2}}</p>
                </div>
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-history"></i>
                    <h1 class="counter">{{$funfact->counter3}}</h1>
                    <p><!--years on market-->{{$funfact->title3}}</p>
                </div>
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-users-social"></i>
                    <h1 class="counter plus">{{$funfact->counter4}}</h1>
                    <p><!--present students-->{{$funfact->title4}}</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set the date we're counting down to
        // ->format('M d, Y H:m')
        var countDownDate = new Date("{{$offers->date ?? ''}}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demotime").innerHTML = days + "jrs  " + hours + "h  "
                + minutes + "m  " + seconds + "s  ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demotime").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    @endsection

