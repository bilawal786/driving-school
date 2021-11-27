<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->longText('description1')->nullable();
            $table->string('name')->nullable();
            $table->string('job')->nullable();
            $table->longText('description2')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            
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
        Schema::dropIfExists('instructors');
    }
}
