<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobbers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
           $table->string('backGroundImage')->nullable();
           $table->longText('description')->nullable();
           $table->string('name')->nullable();
           $table->string('job')->nullable();
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
        Schema::dropIfExists('jobbers');
    }
}
