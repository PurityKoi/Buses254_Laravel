<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_details', function (Blueprint $table) {
                             
                $table->increments('bus_id');
                $table->string('bus_no_plate')->unique ();                
                $table->Integer('company_id')->unsigned ();
                $table->foreign('company_id')
                      ->references('company_id')->on('bus_company')
                      ->onDelete('cascade')
                      ->onUpdate('cascade');

                $table->integer('no_of_seats');


        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_details');
    }
}
