<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->unsignedBigInteger('phone')->unique()->nullable();
            $table->longText('location')->nullable();
            $table->string('job_title')->nullable();
            $table->longText('job_description')->nullable();
            $table->string('job_type')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}