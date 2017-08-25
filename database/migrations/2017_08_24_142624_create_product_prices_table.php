<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('config_price_id')->unsigned();
            $table->string('profile', 30);
            $table->decimal('price_card',8, 2)->default(0);
            $table->decimal('price_cash',8, 2)->default(0);
            $table->decimal('offer_card',8, 2)->nullable();
            $table->decimal('offer_cash',8, 2)->nullable();
            $table->decimal('price_percent',8, 2)->nullable();
            $table->decimal('offer_percent',8, 2)->nullable();
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

            $table->foreign('config_price_id')
                ->references('id')->on('config_prices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_prices');
    }
}
