<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$website->siteName}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/img/favicon.ico')}}">
    <!-- Fonts -->
    <link href="{{asset('front/fonts/lato/lato.css')}}" rel="stylesheet">
    <!-- CSS -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('front/css/icofont.css')}}">
    <!-- Plugins CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('front/css/plugins.css')}}">
    <!-- ShortCodes CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('front/css/shortcode/shortcodes.css')}}">
    <!-- Style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <!-- Modernizer JS
    ============================================ -->
    <script src="{{asset('front/js/vendor/modernizr-2.8.3.min.js')}}"></script>


    <style>
        .nivo-caption {
            position: inherit;

        }

        .single-feature .icon i {
            color: #DC143C;
            font-size: 36px;
            display: block;
        }
        .main-menu nav > ul > li.active > a {
            color: white !important;
        }
        .main-menu nav > ul > li > a {
            color: white !important;
        }
        .course-item i {
            color: #DC143C;
            display: inline-block;
            font-size: 48px;
            margin-bottom: 18px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }
        .single-pricing:hover .pricing-head, .active .pricing-head {
            background-color: #DC143C;
        }
        .single-pricing:hover .pricing-action, .active .pricing-action {
            background-color: #DC143C;
        }
        .single-pricing:hover .pricing-price, .active .pricing-price {
             background-image: url(../../img/shape/pricing/price-border-color.png);
        }
        .gallery-image::before {
            background-color: #DC143C;
            bottom: 0;
            content: "";
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .ti-slider .single-slide.slick-center .image {
            border: 2px solid #DC143C;
            height: 140px;
            margin-top: 0;
            width: 140px;
        }
        .panel-title a[aria-expanded="true"] {
            background-color: #DC143C;
            color: #fff;
        }
        #scrollUp {
            background-color: #DC143C;
        }
        .section-title i {
            color: #DC143C;
            display: inline-block;
            font-size: 18px;
        }
        .course-item:hover {
            background-image: url("img/shape/course/course-color.png");
            transform: rotate(360deg);
            background-color: #DC143C;
        }
        /*.nivoSlider img {*/
        /*    position: absolute;*/
        /*    top: 92px;*/
        /*    left: 0px;*/
        /*    max-width: none;*/
        /*    height: 100vh;*/
        /*}*/
        .header-transparent {
            background-color: rgba(0,0,0,0.7);
        }
    .footer-area {
        background: rgba(0, 0, 0, 0) url('{{ asset($website->footerBackGroundImage ?? '') }}') repeat scroll center center;
    -webkit-background-size: cover;
    background-size: cover;
}
        @media only screen and (max-width: 600px) {
            .nivoSlider img {
                position: absolute;
                top: 0px;
                left: 0px;
                max-width: none;
            }
        }
.testimonial-area {
    background: rgba(0, 0, 0, 0) url('{{ asset($website->jooberBackGroundImage ?? '') }}') repeat scroll 0 0;
    -webkit-background-size: cover;
    background-size: cover;
}

.pricing-area {
    background: rgba(0, 0, 0, 0) url('{{ asset($website->courseBackGroundImage ?? '') }}') repeat scroll 0 0;
    -webkit-background-size: cover;
    background-size: cover;
}

.video-area {
    background: rgba(0, 0, 0, 0) url('{{ asset($video->backGroundImage ?? '') }}') repeat scroll 0 0;
    -webkit-background-size: cover;
    background-size: cover;
    padding: 195px 0;
}
        .overlay-80:before {
            opacity: 0.6;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        }

        .funfact-area {
            background: rgba(0, 0, 0, 0) url('{{ asset($funfact->backGroundImage ?? '') }}') no-repeat scroll center center;
            -webkit-background-size: cover;
            background-size: cover;
        }
        .heading {
          color:#DC143C;
        }
        .contact-info .single-info .icon {
            background-color: #DC143C;
        }
        .form .input input[type="submit"] {
            background-color: #DC143C;
            border: 1px solid #DC143C;
        }
</style>
</head>
<body>
<!-- Pre Loader
============================================ -->
<!-- <div class="preloader">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_one"></div>
            <div class="object object_two"></div>
            <div class="object object_three"></div>
        </div>
    </div>
</div> -->
<!-- Body main wrapper start -->
<div class="wrapper fix">
    <!-- Header 1
    ============================================ -->
    <div class="header-area header-absolute header-transparent">

        <div class="header-bottom sticky">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="navbar-header col-auto">
{{--                        <a href="{{route('front.index')}}" class="logo navbar-brand"><img id="logo_img" style="width: 80px; hight:80px;" src="{{asset($website->logo ?? '')}}" alt="logo" /></a>--}}
                    </div>
                    <div class="main-menu mean-menu col-auto">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{route('front.index')}}"><!--Home-->Accueil</a></li>
                                <li ><a href="{{route('front.index')}}#about-area"><!--About-->à propos</a></li>
                                <li><a href="{{route('front.index')}}#feature-area"><!--Feature-->NOS SERVICES
                                    </a></li>
                                <!--<li><a href="#course-area">--><!--Course--><!--Cours</a></li>-->
                                <li><a href="{{route('front.index')}}#video-area"><!--Video-->Vidéo</a></li>
                                <!--<li><a href="#pricing-area">--><!--Pricing--><!--Prix</a></li>-->
                                <!--<li><a href="#instructor-area">--><!--Instructor--><!--Instructrice</a></li>-->
                                <li><a href="{{route('front.index')}}#gallery-area"><!--Gallery-->Galerie</a></li>
                                <li><a href="{{route('front.index')}}#testimonial-area"><!--Testimonial-->Témoignage</a></li>
                                <li><a href="{{route('front.index')}}#faq-area"><!--FAQ-->FAQ</a></li>

                                <li><a href="{{route('front.contact')}}"><!--Contact Us-->Contact</a></li>
                                @auth
                                <li><a href="{{route('home')}}"><!--Contact Us-->{{Auth::user()->fname}} {{Auth::user()->lname}}</a></li>
                                @else
                                <li><a href="{{route('front.login')}}"><!--Contact Us-->Connexion</a></li>

                                @endauth
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu col-12"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Slide Area
    ============================================ -->


@yield('content')


    <!-- Footer Area
    ============================================ -->
    <div id="footer-area" class="footer-area overlay overlay-black overlay-70 pt-90">
        <div class="container">
            <div class="row">
                <div class="footer-widget text-left col-lg-6 col-md-6 col-12">
                    <h4 class="widget-title"><!--about drive on-->À PROPOS DE LA CONDUITE</h4>
                    <div class="about-widget">
                        <p>{{$website->aboutDescription ?? ''}}</p>
                        <div class="widget-social fix">
                            <a href="{{$website->facebook ?? ''}}"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="{{$website->instagram ?? ''}}"><i class="icofont icofont-social-instagram"></i></a>

                        </div>
                    </div>
                </div>
                <div class="footer-widget text-left col-lg-6 col-md-6 col-12">
                    <h4 class="widget-title">CONTACT RAPIDE</h4>
                    <div class="contact-widget">
                        <h5>adresse:</h5>
                        <p>{{$website->address ?? ''}}</p>
                        <h5>phone:</h5>
                        <p>{{$website->phone1 ?? ''}} <br />{{$website->phone2 ?? ''}}</p>
                        <h5>e-mail</h5>
                        <p>
                            <a href="#">{{$website->email ?? ''}}</a>

                        </p>
                    </div>
                </div>
                <!-- <div class="footer-widget text-left col-lg-4 col-md-6 col-12">
                    <h4 class="widget-title">ARTICLE DE BLOG</h4>
                    <div class="blog-widget">
                        <div class="widget-blog fix">
                            <a href="#" class="image float-left"><img src="{{asset($website->articleImage1 ?? '')}}" alt="" /></a>
                            <div class="content fix">
                                <a href="#">{{$website->articleBlogTitle1 ?? ''}}</a>
                                <p>{{$website->articleDescription1 ?? ''}}</p>
                            </div>
                        </div>
                        <div class="widget-blog fix">
                            <a href="#" class="image float-left"><img src="{{asset($website->articleImage1 ?? '')}}" alt="" /></a>
                            <div class="content fix">
                                <a href="#">{{$website->articleBlogTitle2 ?? ''}}</a>
                                <p>{{$website->articleDescription2 ?? ''}}</p>
                            </div>
                        </div>
                        <div class="widget-blog fix">
                            <a href="#" class="image float-left"><img src="{{asset($website->articleImage1 ?? '')}}" alt="" /></a>
                            <div class="content fix">
                                <a href="#">{{$website->articleBlogTitle3 ?? ''}}</a>
                                <p>{{$website->articleDescription3 ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="footer-widget text-left col-lg-3 col-md-6 col-12">
                    <h4 class="widget-title">GALERIE INSTAGRAM</h4>
                    <div class="instagram-widget">
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/1.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/2.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/3.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/4.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/5.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/6.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/7.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/8.jpg')}}" alt="" /></a></div>
                        <div class="instagram-item"><a href="#"><img src="{{asset('front/img/instagram/9.jpg')}}" alt="" /></a></div>
                    </div>
                </div> -->
            </div>
            <div >
                <p class="copyright">Copyright &copy; Develop by <a href="www.ikaedigital.com">Ikae Digital</a> </p>
            </div>
        </div>
    </div>

</div>
<!-- Body main wrapper end -->

<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="{{asset('front/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugins JS
============================================ -->
<script src="{{asset('front/js/plugins.js')}}"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="{{asset('front/js/ajax-mail.js')}}"></script>
<!-- WOW JS
============================================ -->
<script src="{{asset('front/js/wow.min.js')}}"></script>
<!-- Main JS
============================================ -->
<script src="{{asset('front/js/main.js')}}"></script>
<script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripeKey = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";
    </script>
    <script src="{{asset('js/stripe.js')}}"></script>

</body>
</html>
