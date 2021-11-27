<?php

use Illuminate\Database\Seeder;
use App\About;
use App\Funfact;
use App\FAQ;
use App\Jobber;
use App\Galery;
use App\Video;
use App\Pricing;
use App\Features;
use App\Website;
use App\CourseCategory;

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
            'description' => "<p>Toute l'histoire<br><br>

            Notre établissement se trouve dans la commune de Sainte-rose, section Nous 
            avons acquis une certaine réputation grâce ux relations que nous a avec nos 
            clients au fil des années.
            Nous sommes convaincus que tous nos clients méritent les meilleurs serv 
            avons décidé d'en faire notre mission.
            Parcourez,notre site pour découvrir nos services.
            En cas de questions. n'hésitez pas à nous contacter. Auto école LIGNE DE 
            CONDUITE 971 est là pour vous servir</p>",
            'image1' => 'front/image2.png',
            'image2' => 'front/image.png',
            
        ]);
    }
}
