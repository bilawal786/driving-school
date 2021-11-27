<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            //header
            $table->string('logo')->nullable();
             $table->string('siteName')->nullable();
            $table->string('phone1')->nullable();
            $table->string('email')->nullable();
            $table->string('startTime')->nullable();
            $table->string('endTime')->nullable();
            //End header

            //footer
            
            $table->longText('aboutDescription')->nullable();
            $table->string('address')->nullable();
            $table->string('phone2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();

            //Article blog
            $table->string('articleBlogTitle1')->nullable();
            $table->longText('articleDescription1')->nullable();
            $table->string('articleImage1')->nullable();

            $table->string('articleBlogTitle2')->nullable();
            $table->longText('articleDescription2')->nullable();
            $table->string('articleImage2')->nullable();

            $table->string('articleBlogTitle3')->nullable();
            $table->longText('articleDescription3')->nullable();
            $table->string('articleImage3')->nullable();
            // End Article blog
            

            $table->longText('copyRight')->nullable();
            //End footer

            //Slider
            $table->string('simage1')->nullable();
            $table->string('simage2')->nullable();
            $table->string('simage3')->nullable();
            //End Slider

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}
