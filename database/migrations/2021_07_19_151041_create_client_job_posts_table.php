<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_job_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unsigned();
            $table->string('job_title')->nullable();
            $table->longText('job_description')->nullable();
            $table->string('sector')->nullable();
            $table->string('job_type')->nullable();
            $table->string('salary')->nullable();
            $table->string('monthly_rate')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('visits')->default(0);

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
        Schema::dropIfExists('client_job_posts');
    }
}
