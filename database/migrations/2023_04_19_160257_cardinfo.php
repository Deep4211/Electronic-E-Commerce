<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cardinfo',function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('tnxId');
            $table->string('name');
            $table->string('cardnumber');
            $table->string('expirydate');
            $table->string('cvv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cardinfo');
    }
};
