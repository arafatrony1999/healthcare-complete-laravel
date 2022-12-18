<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobApplyForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_apply_form', function(Blueprint $job_table){

            $job_table->bigIncrements('id');
            $job_table->string('firstName');
            $job_table->string('lastName');
            $job_table->string('gender');
            $job_table->string('number');
            $job_table->string('email');
            $job_table->string('FB')->nullable();
            $job_table->string('address');
            $job_table->string('city');
            $job_table->string('zip')->nullable();
            $job_table->string('nid');
            $job_table->string('valid_code');
            $job_table->string('valid_status')->default('not_valid');
            $job_table->string('image')->nullable();
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
       
    }
}
