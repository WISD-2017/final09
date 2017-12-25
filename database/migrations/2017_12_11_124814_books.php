<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books',function (Blueprint $table){
           $table->increments('id');
           $table->string('book_name',255);
           $table->integer('inventory')->nullable()	;
           $table->string('ISBN',255);
           $table->string('category_id',10);
           $table->string('text',255);
           $table->integer('price');
           $table->string('path',255);
           $table->rememberToken();
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
        Schema::dropIfExists('books');
    }
}
