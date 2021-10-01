<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitoryMechanizmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitory_mechanizms', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('number');
            $table->string('color');
            $table->string('name');
            $table->unsignedBigInteger('tax_id');
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade');
            $table->unsignedBigInteger('transitory_user_id')->nullable();
            $table->foreign('transitory_user_id')->references('id')->on('transitory_users')->onDelete('cascade');
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
        Schema::dropIfExists('transitory_mechanizms');
    }
}
