<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
 

.footer-area {
    background: rgba(0, 0, 0, 0) url('{{ asset($website->footerBackGroundImage ?? '') }}') repeat scroll center center;
    -webkit-background-size: cover;
    background-size: cover;
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
.heading {
  color:red;
}
</style>
</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_one"></div>
            <div class="object object_two"></div>
            <div class="object object_three"></div>
        </div>
    </div>
</div>
<!-- Body main wrapper start -->
<div class="wrapper fix">
    <!-- Header 1
    ============================================ -->
    <div class="header-area header-absolute header-transparent">
        <div class="header-top d-none d-md-block">
            <div class="container">
                <!-- Header Top -->
                <div class="header-top-wrapper row">
                    <div class="header-top-left text-left col-md-6 col-12">
                        <p><i class="icofont icofont-envelope"></i><span>{{$website->email ?? ''}}</span></p>
                        <p><i class="icofont icofont-ui-call"></i><span>{{$website->phone1 ?? ''}} </span></p>
                    </div>
                    <div class="header-top-right text-right col-md-6 col-12">
                        <p><i class="icofont icofont-clock-time"></i><span>Mon - Sat : {{$website->startTime ?? ''}} - {{$website->endTime ?? ''}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom sticky">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="navbar-header col-auto">
                        <a href="#hero-area" class="logo navbar-brand"><img id="logo_img" style="width: 80px; hight:80px;" src="{{asset($website->logo ?? '')}}" alt="logo" /></a>
                    </div>
                    <div class="main-menu mean-menu col-auto">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{route('front.index')}}"><!--Home-->Accueil</a></li>
                                <li><a href="#about-area"><!--About-->Sur</a></li>
                                <li><a href="#feature-area"><!--Feature-->Caractéristique</a></li>
                                <!--<li><a href="#course-area">--><!--Course--><!--Cours</a></li>-->
                                <li><a href="#video-area"><!--Video-->Vidéo</a></li>
                                <!--<li><a href="#pricing-area">--><!--Pricing--><!--Prix</a></li>-->
                                <!--<li><a href="#instructor-area">--><!--Instructor--><!--Instructrice</a></li>-->
                                <li><a href="#gallery-area"><!--Gallery-->Galerie</a></li>
                                <li><a href="#testimonial-area"><!--Testimonial-->Témoignage</a></li>
                                <li><a href="#faq-area"><!--FAQ-->FAQ</a></li>
                                
                                <li><a href="{{route('front.contact')}}"><!--Contact Us-->Contact</a></li>
                                @auth
                                <li><a href="{{route('home')}}"><!--Contact Us-->Dashboard</a></li>
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
                        <h5>address:</h5>
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
            <div class="footer-bottom text-center col-12">
                <p class="copyright">Copyright &copy; {{$website->copyRight}}</p>
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

</body>
</html>