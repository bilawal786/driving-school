<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_enrolls', function (Blueprint $table) {
            $table->id();
            $table->longText('pricingDescription')->nullable();

            $table->string('courseTitle')->nullable();
            $table->string('price')->nullable();
            $table->longText('courseDetails1')->nullable();
            $table->longText('courseDetails2')->nullable();
            $table->longText('courseDetails3')->nullable();
            $table->longText('courseDetails4')->nullable();
            $table->longText('courseDetails5')->nullable();

            
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
        Schema::dropIfExists('course_enrolls');
    }
}
