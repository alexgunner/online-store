<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
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
            //$table->string('name');
            //$table->string('email');
            $table->integer('category_id');
            $table->string('title');
            $table->string('saleby');
            $table->string('price');
            $table->string('description');
            $table->string('location');
            $table->string('image');
            $table->boolean('active')->default('1');
            $table->rememberToken();
            $table->timestamps();
        });

         Schema::table('products', function($table){
            $table->foreign('category_id')->references('id')->on('category');
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
