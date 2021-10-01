<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateOfPermanentPassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_of_permanent_passes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('entry');
            $table->timestamp('exit')->nullable();
            $table->unsignedBigInteger('pass_id');
            $table->foreign('pass_id')->references('id')->on('permanent_passes')->onDelete('cascade');
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
        Schema::dropIfExists('date_of_permanent_passes');
    }
}
