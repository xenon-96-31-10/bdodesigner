<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('region');
            $table->string('city');
            $table->string('street');
            $table->string('numberofhouse');
            $table->string('numberofroom');
            $table->decimal('totalarea', 6, 1);
            $table->decimal('livingarea', 6, 1);
            $table->unsignedBigInteger('typeofproject_id');
            $table->foreign('typeofproject_id')->references('id')->on('type_of_projects');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('project_group_id')->nullable();
            $table->foreign('project_group_id')->references('id')->on('project_groups')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('projects');
    }
}
