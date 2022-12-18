<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FindJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_jobs', function(Blueprint $job_table){

            $job_table->bigIncrements('id');
            $job_table->string('needservice');
            $job_table->string('patientaddress');
            $job_table->string('problem');
            $job_table->string('age');
            $job_table->string('gender');
            $job_table->string('shift');
            $job_table->timeStamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
