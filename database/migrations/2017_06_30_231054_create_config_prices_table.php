<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile', 50)->unique();
            $table->float('percent');
            $table->char('order', 2);
            $table->enum('status', ['Ativo', 'Inativo']);
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
        Schema::dropIfExists('config_prices');
    }
}
