<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
             $table->id();
             
             $table->string('title1')->nullable();
             $table->string('title2')->nullable();
             $table->string('title3')->nullable();
             $table->string('title4')->nullable();
             $table->string('title5')->nullable();
             $table->string('title6')->nullable();
             $table->longText('description1')->nullable();
             $table->longText('description2')->nullable();
             $table->longText('description3')->nullable();
             $table->longText('description4')->nullable();
             $table->longText('description5')->nullable();
             $table->longText('description6')->nullable();
             $table->string('image')->nullable();
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
        Schema::dropIfExists('features');
    }
}
