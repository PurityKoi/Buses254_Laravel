<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('bus_schedule', function (Blueprint $table) {

                $table->increments('schedule_id')->unique ();

                
                $table->integer('bus_id')->unsigned ();
                $table->foreign('bus_id')
                      ->references('bus_id')->on('bus_details')
                      ->onDelete('cascade')
                      ->onUpdate('cascade');

                $table->string('county_of_departure');
                $table->string('county_of_arrival');
                $table->date('date_of_travel');
                $table->dateTime('time_of_arrival');
                

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule');
    }
}
