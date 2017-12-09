<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketOfficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_officer', function (Blueprint $table) {
           
            $table->increments('officer_id');
            $table->integer('officer_national_IDno')->unique();
            $table->string('officer_name');
            $table->integer('officer_phone_no');
            $table->string('county_of_residence');
            $table->string('officer_email');
            $table->string('officer_password');
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
        Schema::dropIfExists('ticket_officer');
    }
}
