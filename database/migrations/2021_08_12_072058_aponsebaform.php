<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aponsebaform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aponsebaform', function(Blueprint $aponsebaform){

            $aponsebaform->bigIncrements('id');
            $aponsebaform->string('firstName');
            $aponsebaform->string('lastName');
            $aponsebaform->string('gender');
            $aponsebaform->string('number');
            $aponsebaform->string('email')->nullable();
            $aponsebaform->string('FB')->nullable();
            $aponsebaform->string('service');
            $aponsebaform->string('address');
            $aponsebaform->string('city');
            $aponsebaform->string('zip')->nullable();
            $aponsebaform->string('nid')->nullable();
            $aponsebaform->timeStamps();
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
