<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->longText('pricingDescription')->nullable();

            $table->string('pricingTitle1')->nullable();
            $table->string('price1')->nullable();
            $table->string('pricingDetails11')->nullable();
            $table->string('pricingDetails12')->nullable();
            $table->string('pricingDetails13')->nullable();
            $table->string('pricingDetails14')->nullable();
            $table->string('pricingDetails15')->nullable();

            $table->string('pricingTitle2')->nullable();
            $table->string('price2')->nullable();
            $table->string('pricingDetails21')->nullable();
            $table->string('pricingDetails22')->nullable();
            $table->string('pricingDetails23')->nullable();
            $table->string('pricingDetails24')->nullable();
            $table->string('pricingDetails25')->nullable();

            $table->string('pricingTitle3')->nullable();
            $table->string('price3')->nullable();
            $table->string('pricingDetails31')->nullable();
            $table->string('pricingDetails32')->nullable();
            $table->string('pricingDetails33')->nullable();
            $table->string('pricingDetails34')->nullable();
            $table->string('pricingDetails35')->nullable();

            $table->string('pricingTitle4')->nullable();
            $table->string('price4')->nullable();
            $table->string('pricingDetails41')->nullable();
            $table->string('pricingDetails42')->nullable();
            $table->string('pricingDetails43')->nullable();
            $table->string('pricingDetails44')->nullable();
            $table->string('pricingDetails45')->nullable();
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
        Schema::dropIfExists('pricings');
    }
}
