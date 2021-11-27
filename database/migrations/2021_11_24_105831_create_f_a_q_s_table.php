<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAQSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_a_q_s', function (Blueprint $table) {
            $table->id();
            $table->longText('description')->nullable();
           $table->string('image')->nullable();
           $table->string('question1')->nullable();
           $table->string('question2')->nullable();
           $table->string('question3')->nullable();
           $table->string('question4')->nullable();
           $table->string('answer1')->nullable();
           $table->string('answer2')->nullable();
           $table->string('answer3')->nullable();
           $table->string('answer4')->nullable();
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
        Schema::dropIfExists('f_a_q_s');
    }
}
