<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientJobPostRequiredSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_job_post_required_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('client_job_post_id')->unsigned();
            $table->string('skill')->nullable();
            $table->string('proficiency')->nullable();
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
        Schema::dropIfExists('client_job_post_required_skills');
    }
}
