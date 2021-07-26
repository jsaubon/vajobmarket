<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekerEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_education', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id')->unsigned();
            $table->string('name_of_school')->nullable();
            $table->string('year_graduated')->nullable();
            $table->string('course_graduated')->nullable();
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
        Schema::dropIfExists('job_seeker_education');
    }
}
