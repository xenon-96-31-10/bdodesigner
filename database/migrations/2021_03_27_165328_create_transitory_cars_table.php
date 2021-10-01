<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitoryCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitory_cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('number');
            $table->string('type');
            $table->string('body');
            $table->string('color');
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
        Schema::dropIfExists('transitory_cars');
    }
}
