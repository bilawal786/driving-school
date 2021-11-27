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
                        <p><i class="icofont icofont-envelope"></i><span>info@example.com</span></p>
                        <p><i class="icofont icofont-ui-call"></i><span>+012 345 678 102 </span></p>
                    </div>
                    <div class="header-top-right text-right col-md-6 col-12">
                        <p><i class="icofont icofont-clock-time"></i><span>Mon - Sat : 8am - 9pm</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom sticky">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="navbar-header col-auto">
                        <a href="#hero-area" class="logo navbar-brand"><img id="logo_img" src="{{asset('front/img/logo/color-1.png')}}" alt="logo" /></a>
                    </div>
                    <div class="main-menu mean-menu col-auto">
                        <nav>
                            <ul>
                                <li class="active"><a href="#hero-area"><!--Home-->Accueil</a></li>
                                <li><a href="#about-area"><!--About-->Sur</a></li>
                                <li><a href="#feature-area"><!--Feature-->Caractéristique</a></li>
                                <!--<li><a href="#course-area">--><!--Course--><!--Cours</a></li>-->
                                <li><a href="#video-area"><!--Video-->Vidéo</a></li>
                                <!--<li><a href="#pricing-area">--><!--Pricing--><!--Prix</a></li>-->
                                <!--<li><a href="#instructor-area">--><!--Instructor--><!--Instructrice</a></li>-->
                                <li><a href="#gallery-area"><!--Gallery-->Galerie</a></li>
                                <li><a href="#testimonial-area"><!--Testimonial-->Témoignage</a></li>
                                <li><a href="#faq-area"><!--FAQ-->FAQ</a></li>
                                
                                <li><a href="#footer-area"><!--Contact Us-->Contact</a></li>
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
    <div id="hero-area" class="hero-slider-area">
        <div id="hero-slider" class="nivoSlider slider-image">
            <img src="{{asset('front/img/slider/1.jpg')}}" alt="main slider" title="#htmlcaption1"/>
            <img src="{{asset('front/img/slider/4.jpg')}}" alt="main slider" title="#htmlcaption2"/>
            <img src="{{asset('front/img/slider/3.jpg')}}" alt="main slider" title="#htmlcaption3"/>
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
                        {{$about->description}}
                    </div>
                    <div class="full margin_top_50" >
                    <img class="img-responsive" src="{{ asset($about->image2 ?? ' ')  }}" alt="#" />
                    </div>
                </div>
            </div>
       
            </div>
        </div>
    </div>
   
    <!-- Feature Area
    ============================================ -->
    <div id="feature-area" class="feature-area bg-gray pt-90 pb-90">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h3 class="heading"><!--our features-->NOS FONCTIONNALITÉS</h3>
                    
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <!-- Left Feature -->
                <div class="feature-wrapper feature-left text-right col-lg-4 col-12">
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-file-spreadsheet"></i></div>
                        <div class="text fix">
                            <h4><!--Quick License-->ACCEUIL</h4>
                            
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-car-alt-4"></i></div>
                        <div class="text fix">
                            <h4><!--Unlimited Car Support-->PARRAINAGE</h4>
                            
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-video-alt"></i></div>
                        <div class="text fix">
                            <h4>VIDEO</h4>
                            
                        </div>
                    </div>
                </div>
                <!-- Feature Image -->
                <div class="feature-image text-center col-lg-4 col-12">
                    <img src="{{asset('front/img/feature.png')}}" alt="feature" />
                </div>
                <!-- Right Feature -->
                <div class="feature-wrapper feature-right text-left col-lg-4 col-12">
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-man-in-glasses"></i></div>
                        <div class="text fix">
                            <h4><!--Experience Instructors-->INFORMATIONS ET TARIFS</h4>
                           
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-clock-time"></i></div>
                        <div class="text fix">
                            <h4>GALERIE PHOTOS</h4>
                            
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon"><i class="icofont icofont-direction-sign"></i></div>
                        <div class="text fix">
                            <h4>CONTACT</h4>
                            
                        </div>
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
                    <div class="course-item text-center">
                        <i class="icofont icofont-car-alt-4"></i>
                        <h4 ><!--normal driving-->FORMATION THEORIQUE (CODE)</h4>
                        <!-- <p>There are many variations of items passag LoIpsum available the majority ratomised </p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <div class="course-item text-center">
                        <i class="icofont icofont-ambulance-cross"></i>
                        <h4 ><!--defensive-->FORMATION PRATIQUES</h4>
                        <!-- <p>There are many variations of items passag LoIpsum available the majority ratomised </p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <div class="course-item text-center">
                        <i class="icofont icofont-fast-delivery"></i>
                        <h4 ><!--power booster-->CONDUITE ACCOMPAGNEE</h4>
                        <!-- <p>There are many variations of items passag LoIpsum available the majority ratomised </p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                    <div class="course-item text-center">
                        <i class="icofont icofont-rocket-alt-2"></i>
                        <h4 s><!--crash level-->CONDUITE SUPERVISEE</h4>
                        <!-- <p>There are many variations of items passag LoIpsum available the majority ratomised </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Video Area
    ============================================ -->
    <div id="video-area" class="video-area overlay overlay-black overlay-50">
        <div class="container">
            <div class="row">
                <div class="video-content text-center col-12">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=ngaeb1jARAY"><i class="icofont icofont-play-alt-2"></i></a>
                    <h3><!--our teaching process-->NOTRE PROCESSUS D'ENSEIGNEMENT</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Area
    ============================================ -->
    <div id="pricing-area" class="pricing-area overlay overlay-black overlay-40 pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title title-white text-center col-12 mb-45">
                    <h3 class="heading"><!--your pricing plan-->VOTRE PLAN TARIFAIRE</h3>
                    <div class="excerpt">
                        <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="single-pricing text-center">
                        <div class="pricing-head">
                            <h4><!--basic-->DE BASE</h4>
                        </div>
                        <div class="pricing-price">
                            <h2><span>$</span>200</h2>
                        </div>
                        <ul class="pricing-details">
                            <li><!--2 Month Course-->Cours De 2 Mois</li>
                            <li><!--3 Hours Per Day-->3 Heures Par Jour</li>
                            <li><!--Weekly 1 Test-->1 Test Hebdomadale </li>
                            <li><!--20 Video Classes-->20 Cours Vidio</li>
                            <li><!--Driving Licence-->Permis De Conduire</li>
                        </ul>
                        <a href="#" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAITH</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="single-pricing text-center">
                        <div class="pricing-head">
                            <h4><!--upgrade-->AMÉLIORER</h4>
                        </div>
                        <div class="pricing-price">
                            <h2><span>$</span>300</h2>
                        </div>
                        <ul class="pricing-details">
                            <li><!--3 Month Course-->Cours De 3 Mois</li>
                            <li><!--4 Hours Per Day-->4 Heures Par Jour</li>
                            <li><!--Weekly 2 Test-->Test Hebdomadale 2</li>
                            <li><!--25 Video Classes-->25 Cours Vidio</li>
                            <li><!--Driving Licence-->Permis De Conduire</li>
                        </ul>
                        <a href="#" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAITH</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="single-pricing active text-center">
                        <div class="pricing-head">
                            <h4><!--smart-->INTELLIGENT</h4>
                        </div>
                        <div class="pricing-price">
                            <h2><span>$</span>400</h2>
                        </div>
                        <ul class="pricing-details">
                            <li><!--4 Month Course-->Cours De 4 Mois</li>
                            <li><!--5 Hours Per Day-->5 Heures Par Jour</li>
                            <li><!--Weekly 2 Test-->Test Hebdomadale 2</li>
                            <li><!--30 Video Classes-->30 Cours Vidio</li>
                            <li><!--Driving Licence-->Permis De Conduire</li>
                        </ul>
                        <a href="#" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAITH</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="single-pricing text-center">
                        <div class="pricing-head">
                            <h4><!--over smart-->TROP INTELLIGENT</h4>
                        </div>
                        <div class="pricing-price">
                            <h2><span>$</span>500</h2>
                        </div>
                        <ul class="pricing-details">
                            <li><!--6 Month Course-->Cours De 6 Mois</li>
                            <li><!--5 Hours Per Day-->5 Heures Par Jour</li>
                            <li><!--Weekly 3 Test--> Test Hebdomadale 3</li>
                            <li><!--35 Video Classes--> 35 Cours Vidio</li>
                            <li><!--Driving Licence-->Permis De Conduire</li>
                        </ul>
                        <a href="#" class="pricing-action"><!--choose plan-->CHOISIR LE FORFAITH</a>
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
                        <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <!-- Instructor Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="instructor-1">
                            <div class="row">
                                <div class="instructor-details text-left col-lg-7 col-12">
                                    <h4 class="instructor-name">JONATHON JOE</h4>
                                    <h5 class="instructor-title">Instructeur</h5>
                                    <p>Il existe de nombreuses variantes de passages de Lorem Ipsum disponibles, mais la majorité ont subi une altération sous une forme ou une autre, par des mots bourdonnants qui ne semblent même pas légèrement crédibles. Il existe de nombreuses variantes de passages de Lorem ipsum disponibles, mais le sur la majorité ont subi une altération sous une forme ou une autre, par des mots hum maksu rez qui ne semblent même pas un peu.</p>
                                    <div class="instructor-social fix">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                    </div>
                                </div>
                                <div class="instructor-image col-lg-5 col-md-6 col-12">
                                    <img src="{{asset('front/img/instructor/big-1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="instructor-2">
                            <div class="row">
                                <div class="instructor-details text-left col-lg-7 col-12">
                                    <h4 class="instructor-name">Martin Adam</h4>
                                    <h5 class="instructor-title">Instructor</h5>
                                    <p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
                                    <div class="instructor-social fix">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                    </div>
                                </div>
                                <div class="instructor-image col-lg-5 col-md-6 col-12">
                                    <img src="{{asset('front/img/instructor/big-2.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="instructor-3">
                            <div class="row">
                                <div class="instructor-details text-left col-lg-7 col-12">
                                    <h4 class="instructor-name">Gabriel Stan</h4>
                                    <h5 class="instructor-title">Instructor</h5>
                                    <p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
                                    <div class="instructor-social fix">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                    </div>
                                </div>
                                <div class="instructor-image col-lg-5 col-md-6 col-12">
                                    <img src="{{asset('front/img/instructor/big-3.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="instructor-4">
                            <div class="row">
                                <div class="instructor-details text-left col-lg-7 col-12">
                                    <h4 class="instructor-name">Thomas Smith</h4>
                                    <h5 class="instructor-title">Instructor</h5>
                                    <p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
                                    <div class="instructor-social fix">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                    </div>
                                </div>
                                <div class="instructor-image col-lg-5 col-md-6 col-12">
                                    <img src="{{asset('front/img/instructor/big-4.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Instructor Tab List -->
                    <ul class="nav instructor-tab-list fix">
                        <li class="active"><a href="#instructor-1" data-toggle="tab"><img src="{{asset('front/img/instructor/1.jpg')}}" alt="" /></a></li>
                        <li><a href="#instructor-2" data-toggle="tab"><img src="{{asset('front/img/instructor/2.jpg')}}" alt="" /></a></li>
                        <li><a href="#instructor-3" data-toggle="tab"><img src="{{asset('front/img/instructor/3.jpg')}}" alt="" /></a></li>
                        <li><a href="#instructor-4" data-toggle="tab"><img src="{{asset('front/img/instructor/4.jpg')}}" alt="" /></a></li>
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
                        <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
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
                    <a href="{{asset('front/')}}img/gallery/1.jpg" class="gallery-image image-popup">
                        <img src="{{asset('front/img/gallery/1.jpg')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item cars exam col-lg-3 col-md-4 col-12">
                    <a href="img/gallery/2.jpg" class="gallery-image image-popup">
                        <img src="{{asset('front/img/gallery/2.jpg')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item classroom col-lg-3 col-md-4 col-12">
                    <a href="img/gallery/3.jpg" class="gallery-image image-popup">
                        <img src="{{asset('front/img/gallery/3.jpg')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item cars students exam col-lg-3 col-md-4 col-12">
                    <a href="img/gallery/4.jpg" class="gallery-image image-popup">
                        <img src="{{asset('front/img/gallery/4.jpg')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item cars students col-lg-3 col-md-4 col-12">
                    <a href="img/gallery/5.jpg" class="gallery-image image-popup">
                        <img src="{{asset('front/img/gallery/5.jpg')}}" alt="" />
                        <div class="content">
                            <i class="icofont icofont-search"></i>
                            <h4>Class Test</h4>
                        </div>
                    </a>
                </div>
                <div class="gallery-item students classroom col-lg-3 col-md-4 col-12">
                    <a href="img/gallery/6.jpg" class="gallery-image image-popup">
                        <img src="{{asset('front/img/gallery/6.jpg')}}" alt="" />
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
                        <div class="single-slide"><div class="image fix"><img src="{{asset('front/img/testimonial/1.jpg')}}" alt="" /></div></div>
                        <div class="single-slide"><div class="image fix"><img src="{{asset('front/img/testimonial/2.jpg')}}" alt="" /></div></div>
                        <div class="single-slide"><div class="image fix"><img src="{{asset('front/img/testimonial/3.jpg')}}" alt="" /></div></div>
                        <div class="single-slide"><div class="image fix"><img src="{{asset('front/img/testimonial/4.jpg')}}" alt="" /></div></div>
                    </div>
                    <!-- Testimonial Content Slider -->
                    <div class="tc-slider">
                        <div class="single-slide">
                        <h5>momen bhuiyan</h5>
                            <span>Graphic Designer</span>
                            <p>"If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands"</p>
                            
                        </div>
                        <div class="single-slide">
                        <h5>momen bhuiyan</h5>
                            <span>Graphic Designer</span>
                            <p>"If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands"</p>
                            
                        </div>
                        <div class="single-slide">
                        <h5>momen bhuiyan</h5>
                            <span>Graphic Designer</span>
                            <p>"If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands"</p>
                            
                        </div>
                        <div class="single-slide">
                        <h5>momen bhuiyan</h5>
                            <span>Graphic Designer</span>
                            <p>"If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands"</p>
                            
                        </div>
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
                        <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                    </div>
                    <i class="icofont icofont-traffic-light"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="panel-group" id="faq">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="true" href="#faq-1">Il existe de nombreuses variantes de passages du Lorem Ipsum ?</a></h4>
                            </div>
                            <div id="faq-1" class="panel-collapse collapse show" data-parent="#faq">
                                <div class="panel-body">
                                    <p>C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-2">Il existe de nombreuses variantes de passages du Lorem Ipsum ?</a></h4>
                            </div>
                            <div id="faq-2" class="panel-collapse collapse" data-parent="#faq">
                                <div class="panel-body">
                                    <p>C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-3">Il existe de nombreuses variantes de passages du Lorem Ipsum ?</a></h4>
                            </div>
                            <div id="faq-3" class="panel-collapse collapse" data-parent="#faq">
                                <div class="panel-body">
                                <p>C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-4">Il existe de nombreuses variantes de passages du Lorem Ipsum ?</a></h4>
                            </div>
                            <div id="faq-4" class="panel-collapse collapse" data-parent="#faq">
                                <div class="panel-body">
                                <p>C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-image col-lg-6 col-12">
                    <img src="{{asset('front/img/faq.png')}}" alt="" />
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
                    <h1 class="counter plus">6500</h1>
                    <p><!--graduted from here-->DIPLOMÉ D'ICI</p>
                </div>
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-user-suited"></i>
                    <h1 class="counter">56</h1>
                    <p><!--teachers number-->NOMBRE D'ENSEIGNANTS</p>
                </div>
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-history"></i>
                    <h1 class="counter">11</h1>
                    <p><!--years on market-->ANS SUR LE MARCHÉ</p>
                </div>
                <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                    <i class="icofont icofont-users-social"></i>
                    <h1 class="counter plus">550</h1>
                    <p><!--present students-->ÉTUDIANTS PRÉSENTS</p>
                </div>
            </div>
        </div>
    </div>
    
   
    
    <!-- Footer Area
    ============================================ -->
    <div id="footer-area" class="footer-area overlay overlay-black overlay-70 pt-90">
        <div class="container">
            <div class="row">
                <div class="footer-widget text-left col-lg-4 col-md-6 col-12">
                    <h4 class="widget-title"><!--about drive on-->À PROPOS DE LA CONDUITE</h4>
                    <div class="about-widget">
                        <p>C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible de</p>
                        <div class="widget-social fix">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-social-rss"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-widget text-left col-lg-4 col-md-6 col-12">
                    <h4 class="widget-title">CONTACT RAPIDE</h4>
                    <div class="contact-widget">
                        <h5>address:</h5>
                        <p>Flor. 4, maison. 15, bloc-C.  <br />Route principale de Banasree, Dhaka.</p>
                        <h5>phone:</h5>
                        <p>+880 1912 345 678 <br />+880 1912 345 678</p>
                        <h5>e-mail</h5>
                        <p>
                            <a href="#">driveonskill@email.com</a>
                            <a href="#">www.driveon.com</a>
                        </p>
                    </div>
                </div>
                <div class="footer-widget text-left col-lg-4 col-md-6 col-12">
                    <h4 class="widget-title">ARTICLE DE BLOG</h4>
                    <div class="blog-widget">
                        <div class="widget-blog fix">
                            <a href="#" class="image float-left"><img src="{{asset('front/img/blog-widget/1.jpg')}}" alt="" /></a>
                            <div class="content fix">
                                <a href="#">NOUVEAU PROJET</a>
                                <p>C'est un fait établi depuis longtemps qu'un lecteur sera...</p>
                            </div>
                        </div>
                        <div class="widget-blog fix">
                            <a href="#" class="image float-left"><img src="{{asset('front/img/blog-widget/2.jpg')}}" alt="" /></a>
                            <div class="content fix">
                                <a href="#">GOOGLE MAPS</a>
                                <p>C'est un fait établi depuis longtemps qu'un lecteur sera...</p>
                            </div>
                        </div>
                        <div class="widget-blog fix">
                            <a href="#" class="image float-left"><img src="{{asset('front/img/blog-widget/3.jpg')}}" alt="" /></a>
                            <div class="content fix">
                                <a href="#">APPRENDRE D'ABORD</a>
                                <p>C'est un fait établi depuis longtemps qu'un lecteur sera...</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                <p class="copyright">Copyright &copy; <a href="#">Driveon</a> ALL Right Reserved</p>
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
