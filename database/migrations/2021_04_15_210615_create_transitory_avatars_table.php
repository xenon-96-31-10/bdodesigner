<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitoryAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitory_avatars', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('transitory_user_id');
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
        Schema::dropIfExists('transitory_avatars');
    }
}
