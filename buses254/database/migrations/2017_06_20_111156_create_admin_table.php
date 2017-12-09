<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator', function (Blueprint $table) {
            
            $table->increments('admin_id');
            $table->integer('admin_national_IDno')->unique();           
            $table->string('admin_name');
            $table->integer('admin_phone_no');            
            $table->string('county_of_residence');
            $table->string('admin_email');
            $table->string('admin_password');
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
        Schema::dropIfExists('administrator');
    }
}
