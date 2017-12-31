<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->string('slug',255)->nullable();
            $table->string('name',255)->nullable();
            $table->string('description',300)->nullable();
            $table->double('price')->nullable();
            $table->string('tags',100)->nullable();
            $table->string('url_image_1')->nullable();
            $table->string('url_image_2')->nullable();
            $table->string('url_image_3')->nullable();
            $table->string('url_image_4')->nullable();
            $table->string('url_image_5')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
