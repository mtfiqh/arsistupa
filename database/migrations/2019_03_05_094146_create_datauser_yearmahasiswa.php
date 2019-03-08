<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatauserYearmahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datauser_yearmahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('datauser_id');
            $table->unsignedBigInteger('yearmahasiswa_id');

            // foreign
            $table->foreign('datauser_id')->references('id')->on('datausers');
            $table->foreign('yearmahasiswa_id')->references('id')->on('yearmahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datauser_yearmahasiswa');
    }
}
