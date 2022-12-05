<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWareHousesTable extends Migration
{
    public function up()
    {
        Schema::create('ware_houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('address');
            $table->integer('phone_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
