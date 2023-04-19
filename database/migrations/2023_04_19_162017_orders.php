<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders',function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('orderId');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('productId')->unsigned();
            $table->foreign('productId')->references('productId')->on('products')->onDelete('cascade');
            $table->date('orderDate');
            $table->string('address');
            $table->bigInteger('amount');
            $table->string('status');
            $table->string('paymode');
            $table->bigInteger('tnxId')->unsigned()->nullable();
            $table->foreign('tnxId')->references('tnxId')->on('cardinfo')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
