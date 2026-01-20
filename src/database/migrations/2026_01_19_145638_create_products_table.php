<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 //商品名
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); //種類
            $table->string('image_path');           //商品画像
            $table->integer('price');               //価格
            $table->string('description', 255);     //説明
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
