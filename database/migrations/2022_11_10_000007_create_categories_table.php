<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->timestamps();
            $table->softDeletes();

            $table->index('id', 'category_product_idx');
            $table->foreign('id', 'category_product_fk')->on('products')->references('id');

        });
    }
}
