<?php

use Illuminate\Database\Seeder;
use App\About;
use App\Funfact;
use App\FAQ;
use App\Jobber;
use App\Galery;
use App\Offers;
use App\Video;
use App\CourseEnroll;
use App\Features;
use App\Website;
use App\CourseCategory;
use App\Instructor;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        About::create([
            'description' => "Toute l'histoire

            Notre établissement se trouve dans la commune de Sainte-rose, section Nous 
            avons acquis une certaine réputation grâce ux relations que nous a avec nos 
            clients au fil des années.
            Nous sommes convaincus que tous nos clients méritent les meilleurs serv 
            avons décidé d'en faire notre mission.
            Parcourez,notre site pour découvrir nos services.
            En cas de questions. n'hésitez pas à nous contacter. Auto école LIGNE DE 
            CONDUITE 971 est là pour vous servir",
            'image1' => 'front/image2.png',
            'image2' => 'front/image.png',
            
        ]);

        Features::create([
            'title1' => "ACCEUIL",
            'title2' => 'PARRAINAGE',
            'title3' => 'VIDEO',
            'title4' => "INFORMATIONS ET TARIFS",
            'title5' => 'GALERIE PHOTOS',
            'title6' => 'CONTACT',
            'description1' => "Lorem ipsum dolor sit amet, consectetur maksu",
            'description2' => 'Lorem ipsum dolor sit amet, consectetur maksu',
            'description3' => 'Lorem ipsum dolor sit amet, consectetur maksu',
            'description4' => "Lorem ipsum dolor sit amet, consectetur maksu",
            'description5' => 'Lorem ipsum dolor sit amet, consectetur maksu',
            'description6' => 'Lorem ipsum dolor sit amet, consectetur maksu',
            'image' => 'front/img/feature.png',
            
        ]);

        CourseCategory::create([
            'category1' => "FORMATION THEORIQUE (CODE)",
            'category2' => 'FORMATION PRATIQUES',
            'category3' => 'CONDUITE ACCOMPAGNE',
            'category4' => "CONDUITE SUPERVISEE",
           
        ]);
        Video::create([
            'video' => "ngaeb1jARAY",
            'title' => "NOTRE PROCESSUS D'ENSEIGNEMENT",
            'backGroundImage' => 'front/img/section-bg/video.jpg',
            ]);
            
            CourseEnroll::create([
                
                'price' => "200",
                'courseDetails1' => 'Cours De 2 Mois',
                'courseDetails2' => "3 Heures Par JourY",
                'courseDetails3' => "1 Test Hebdomadale",
                'courseDetails4' => '20 Cours Vidio',
                'courseDetails5' => "Permis De Conduire",
                'courseTitle' => "DE BASE",
                
               
            ]);
            CourseEnroll::create([
                
                'price' => "300",
                'courseTitle' => "Cours De 3 Mois",
                'courseDetails1' => '3 Heures Par JourY',
                'courseDetails2' => " Test Hebdomadale 2",
                'courseDetails3' => "30 Cours Vidio",
                'courseDetails4' => 'Permis De Conduire',
                'courseDetails5' => 'INTELLIGENT',
                
               
            ]);
            CourseEnroll::create([
                'courseTitle' => 'AMÉLIORER',
                'price' => "400",
                'courseDetails1' => "Cours De 4 Mois",
                'courseDetails2' => '4 Heures Par JourY',
                'courseDetails3' => "Test Hebdomadale 3",
                'courseDetails4' => "40 Cours Vidio",
                'courseDetails5' => 'Permis De Conduire',
                
               
            ]);
            CourseEnroll::create([
                'courseTitle' => 'TROP INTELLIGENT',
                'price' => "500",
                'courseDetails1' => "Cours De 5 Mois",
                'courseDetails2' => '3 Heures Par JourY',
                'courseDetails3' => "Test Hebdomadale 5",
                'courseDetails4' => "50 Cours Vidio",
                'courseDetails5' => 'Permis De Conduire',
                
               
            ]);
            CourseEnroll::create([
                'courseTitle' => 'AMÉLIORER',
                'price' => "400",
                'courseDetails1' => "Cours De 4 Mois",
                'courseDetails2' => '4 Heures Par JourY',
                'courseDetails3' => "Test Hebdomadale 3",
                'courseDetails4' => "40 Cours Vidio",
                'courseDetails5' => 'Permis De Conduire',
                
               
            ]);

            Galery::create([
                'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
                'image1' => "front/img/gallery/1.jpg",
                'image2' => 'front/img/gallery/2.jpg',
                'image3' => "front/img/gallery/3.jpg",
                'image4' => 'front/img/gallery/4.jpg',
                'image5' => "front/img/gallery/5.jpg",
                'image6' => 'front/img/gallery/6.jpg',
                ]);

                FAQ::create([
                    'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
                    'image' => "front/img/faq.png",
                    'answer1' => "C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.",
                    'question1' => "Il existe de nombreuses variantes de passages du Lorem Ipsum ?",
                    'answer2' => "C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.",
                    'question2' => "Il existe de nombreuses variantes de passages du Lorem Ipsum ?",
                    'answer3' => "C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.",
                    'question3' => "Il existe de nombreuses variantes de passages du Lorem Ipsum ?",
                    'answer4' => "C'est un fait établi de longue date qu'un lecteur sera distrait par le lisible est un contenu de la page en regardant sa mise en page. Le point d'utiliser Lorem Ipsum est qu'il a un plus moins normal.",
                    'question4' => "Il existe de nombreuses variantes de passages du Lorem Ipsum ?",
                    ]);

                    Funfact::create([
                        'backGroundImage' => "front/img/gallery/1.jpg",
                        'title1' => "DIPLOMÉ D'ICI",
                        'title2' => "NOMBRE D'ENSEIGNANTS",
                        'title3' => "ANS SUR LE MARCHÉ",
                        'title4' => 'ÉTUDIANTS PRÉSENTS',
                        'counter1' => "876",
                        'counter2' => '8976',
                        'counter3' => "456",
                        'counter4' => '87',
                        ]);

            Website::create([
                'logo' => "local/logo.png",
                'phone1' => "+012 345 678 102",
                'email' => "info@example.com",
                'startTime' => " 8am",
                'endTime' => "9pm",
                'aboutDescription' => "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible de",
                'address' => "Flor. 4, maison. 15, bloc-C.Route principale de Banasree, Dhaka.",
                'phone2' => "+012 345 678 102",
                'facebook' => "www.facebook.com",
                'instagram' => "instagram.com",
                'articleBlogTitle1' => "GOOGLE MAPS",
                'articleDescription1' => "C'est un fait établi depuis longtemps qu'un lecteur sera...",
                'articleImage1' => 'front/img/blog-widget/1.jpg',
                'articleBlogTitle2' => "APPRENDRE D'ABORD",
                'articleDescription2' => "C'est un fait établi depuis longtemps qu'un lecteur sera...",
                'articleImage2' => 'front/img/blog-widget/2.jpg',
                'articleBlogTitle3' => "NOUVEAU PROJET",
                'articleDescription3' => "C'est un fait établi depuis longtemps qu'un lecteur sera...",
                'articleImage3' => 'front/img/blog-widget/2.jpg',
                'siteName' => "Driving School",
                'simage1' => 'front/img/slider/1.jpg',
                'simage2' => "front/img/slider/4.jpg",
                'simage3' => 'front/img/slider/3.jpg',
                'footerBackGroundImage' => 'front/img/section-bg/footer.jpg',
                'copyRight' => 'Driveon ALL Right Reserved',
                'jooberBackGroundImage' => 'front/img/section-bg/testimonial.jpg',
                'courseBackGroundImage' => 'front/img/section-bg/pricing.jpg',
                'courseDescription' => 'Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua',
                
                ]);
        Jobber::create([
            'image' => "front/img/testimonial/1.jpg",
            'backGroundImage' => "front/img/testimonial/1.jpg",
            'description' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
            'name' => "Momen bhuiyan",
            'job' => "Graphic Designer",
            
            ]);
            Jobber::create([
        'image' => "front/img/testimonial/1.jpg",
        'backGroundImage' => "front/img/testimonial/1.jpg",
        'description' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
        'name' => "Momen bhuiyan",
        'job' => "Graphic Designer",
        
        ]);
        Jobber::create([
            'image' => "front/img/testimonial/1.jpg",
            'backGroundImage' => "front/img/testimonial/1.jpg",
            'description' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
            'name' => "Momen bhuiyan",
            'job' => "Graphic Designer",
            
            ]);

            Instructor::create([
                'image1' => "front/img/instructor/1.jpg",
                'image2' => "front/img/instructor/big-3.jpg",
                'description1' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
                'description2' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
                'name' => "Momen bhuiyan",
                'job' => "Graphic Designer",
                'facebook' => "www.facebook.com",
                'instagram' => "instagram.com",
                
                
                ]);
                Instructor::create([
                    'image1' => "front/img/instructor/1.jpg",
                    'image2' => "front/img/instructor/big-3.jpg",
                    'description1' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
                    'description2' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
                    'name' => "M Usman",
                    'job' => "Devloper",
                    'facebook' => "www.facebook.com",
                    'instagram' => "instagram.com",
                    
                    
                    ]);
                    Instructor::create([
                        'image1' => "front/img/instructor/1.jpg",
                        'image2' => "front/img/instructor/big-3.jpg",
                        'description1' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
                        'description2' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
                        'name' => "Bilawal",
                        'job' => "Web Designer",
                        'facebook' => "www.facebook.com",
                        'instagram' => "instagram.com",
                        
                        
                        ]);
                        Instructor::create([
                            'image1' => "front/img/instructor/1.jpg",
                            'image2' => "front/img/instructor/big-3.jpg",
                            'description1' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
                            'description2' => "If you need any help or assistance we'd be happy to help. Just reply to this email. Trusted by Agency proud to work many well known brands",
                            'name' => "Hamza",
                            'job' => "Graphic Designer",
                            'facebook' => "www.facebook.com",
                            'instagram' => "instagram.com",
                            
                            
                            ]);
                        Offers::create([
                            'title' => "Web Developmant",
                            'image' => "front/image2.png",
                            'link' => "http://127.0.0.1:8000",
                            'date' => "2021-12-09T05:54",
                            'oldPrice' => "300",
                            'newPrice' => "200",
                        
                            ]);
                            
                
                                

                               




                    

    
       

         

       
        
    }
}
