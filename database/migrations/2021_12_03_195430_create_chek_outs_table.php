<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChekOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chek_outs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('course_id')->nullable();
            $table->string('courseTitle')->nullable();
            $table->string('total')->nullable();
            $table->string('quantity')->default(1);
            $table->string('pay');

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
        Schema::dropIfExists('chek_outs');
    }
}
