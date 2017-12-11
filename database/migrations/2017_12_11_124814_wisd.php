<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wisd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product',function (Blueprint $table){
           $table->string('book_id',10)->index();
           $table->string('book_name',255);
           $table->integer('inventory');
           $table->string('ISBN',255);
           $table->string('category_id',10);
           $table->string('text',255);
           $table->integer('price');
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
        Schema::dropIfExsit('product');
    }
}
