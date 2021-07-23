<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekerProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_professions', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id')->unsigned();
            $table->string('job_title')->nullable();
            $table->string('availability')->nullable();
            $table->string('salary')->nullable();
            // $table->string('hourly_rate')->nullable();
            $table->longText('skills_summary')->nullable();


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
        Schema::dropIfExists('job_seeker_professions');
    }
}
