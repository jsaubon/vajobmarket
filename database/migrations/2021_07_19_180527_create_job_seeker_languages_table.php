<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekerLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_languages', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id')->unsigned();
            $table->string('language')->nullable();
            $table->string('written_preffeciency')->nullable();
            $table->string('oral_preffeciency')->nullable();
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
        Schema::dropIfExists('job_seeker_languages');
    }
}
