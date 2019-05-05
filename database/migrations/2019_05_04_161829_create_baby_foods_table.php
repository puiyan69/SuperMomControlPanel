<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabyFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babyFoods', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('image');
            $table->char('name');
            $table->text('suitableAge');
            $table->longText('ingredients');
            $table->longText('instructions');
            $table->longText('descriptions');
            $table->timestamps()
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babyFoods');
    }
}
