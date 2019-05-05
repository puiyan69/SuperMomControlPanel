<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccineschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccineschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->char('vaccine_name');
            $table->date('vaccine_date');
            $table->unsignedInteger('baby_id');
            $table->foreign('baby_id')->references('id')->on('babyinfos');
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
        Schema::dropIfExists('vaccineschedules');
    }
}
