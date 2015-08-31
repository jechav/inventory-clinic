<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_accesories', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('product_id')->unsigned();
          $table->integer('accessory_id')->unsigned();

          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('accessory_id')->references('id')->on('accessories');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_accesories');
    }
}
