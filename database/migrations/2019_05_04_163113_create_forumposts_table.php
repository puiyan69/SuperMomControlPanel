<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forumposts', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('post_content');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('forumusers');
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
        Schema::dropIfExists('forumposts');
    }
}
