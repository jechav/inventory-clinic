<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

          $table->increments('id');
          $table->string('name');
          $table->string('model');
          $table->string('series');
          $table->string('voltage');

          $table->enum('voltage_type', ['AC', 'DC']);
          $table->enum('frecuencia', ['60hz', '50hz'])->nullable();

          $table->enum('property', ['HOSPITAL', 'PRESTADO', 'COMODATO', 'MEDICO']);
          $table->enum('state', ['OPERATIVE', 'DAMAGED']);
          $table->enum('type', ['FIXED', 'MOBILE']);

          $table->integer('location_id')->unsigned();
          $table->integer('brand_id')->unsigned();
          $table->integer('manufacture_id')->unsigned();

          $table->softDeletes();
          $table->timestamps();

          $table->foreign('location_id')->references('id')->on('locations');
          $table->foreign('brand_id')->references('id')->on('brands');
          $table->foreign('manufacture_id')->references('id')->on('manufactures');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
