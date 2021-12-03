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
            $table->longText('pricingDetails11')->nullable();
            $table->longText('pricingDetails12')->nullable();
            $table->longText('pricingDetails13')->nullable();
            $table->longText('pricingDetails14')->nullable();
            $table->longText('pricingDetails15')->nullable();

            $table->string('pricingTitle2')->nullable();
            $table->string('price2')->nullable();
            $table->longText('pricingDetails21')->nullable();
            $table->longText('pricingDetails22')->nullable();
            $table->longText('pricingDetails23')->nullable();
            $table->longText('pricingDetails24')->nullable();
            $table->longText('pricingDetails25')->nullable();

            $table->string('pricingTitle3')->nullable();
            $table->string('price3')->nullable();
            $table->longText('pricingDetails31')->nullable();
            $table->longText('pricingDetails32')->nullable();
            $table->longText('pricingDetails33')->nullable();
            $table->longText('pricingDetails34')->nullable();
            $table->longText('pricingDetails35')->nullable();

            $table->string('pricingTitle4')->nullable();
            $table->string('price4')->nullable();
            $table->longText('pricingDetails41')->nullable();
            $table->longText('pricingDetails42')->nullable();
            $table->longText('pricingDetails43')->nullable();
            $table->longText('pricingDetails44')->nullable();
            $table->longText('pricingDetails45')->nullable();
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
