<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekerSpecializedSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_specialized_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('experience')->nullable();
            $table->string('proficiency')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('job_seeker_specialized_skills');
    }
}
