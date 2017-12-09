<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('bus_company', function (Blueprint $table) {
        
            $table->increments('company_id');
            $table->string('company_name')->unique();
            $table->string('company_reg_id');
            $table->string('owner_name');
            $table->integer('owner_national_IDno');
            $table->string('company_office_location');
            $table->integer('company_phone_no');
            $table->string('company_email');
            $table->string('company_password');
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
        Schema::dropIfExists('bus_company');
    }
}
