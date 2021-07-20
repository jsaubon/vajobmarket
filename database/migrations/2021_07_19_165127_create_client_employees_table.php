<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_employees', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unsigned();
            $table->integer('jobseeker_id')->unsigned();
            $table->string('status')->default('Applicant');
            $table->string('employment_status')->nullable();
            $table->string('salary')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('date_hired')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->string('contract')->nullable();




            $table->date('initial_interview_date')->nullable();
            $table->longText('initial_interview_message')->nullable();
            $table->longText('initial_interview_remarks')->nullable();
            $table->date('skills_assessment_date')->nullable();
            $table->longText('skills_assessment_message')->nullable();
            $table->longText('skills_assessment_remarks')->nullable();
            $table->date('final_interview_date')->nullable();
            $table->longText('final_interview_message')->nullable();
            $table->longText('final_interview_remarks')->nullable();
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
        Schema::dropIfExists('client_employees');
    }
}
