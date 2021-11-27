<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunfactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funfacts', function (Blueprint $table) {
            $table->id();
            $table->string('backGroundImage')->nullable();
           $table->string('title1')->nullable();
           $table->string('title2')->nullable();
           $table->string('title3')->nullable();
           $table->string('title4')->nullable();
           $table->string('counter1')->nullable();
           $table->string('counter2')->nullable();
           $table->string('counter3')->nullable();
           $table->string('counter4')->nullable();
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
        Schema::dropIfExists('funfacts');
    }
}
