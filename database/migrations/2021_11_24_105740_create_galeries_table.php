<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->longText('description')->nullable();
           $table->string('image1')->nullable();
           $table->string('image2')->nullable();
           $table->string('image3')->nullable();
           $table->string('image4')->nullable();
           $table->string('image5')->nullable();
           $table->string('image6')->nullable();
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
        Schema::dropIfExists('galeries');
    }
}
