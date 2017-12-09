<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('passengers', function (Blueprint $table) {
           
            $table->increments('passenger_id');
            $table->integer('passenger_national_IDno')->unique();                    
            $table->string('passenger_name');
            $table->integer('passenger_phone_no');           
            $table->string('passenger_email');
            $table->string('passenger_password');
            $table->rememberToken();
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
        Schema::dropIfExists('passengers');
    }
}
