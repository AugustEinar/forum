<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('leikstjori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nafn');
            $table->string('thjoderni');
        });

        Schema::create('dvd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titill');
            $table->string('adalleikari');
            $table->integer('utgafuar');
            $table->integer('verd');
            $table->string('flokkur');
            $table->unsignedInteger('leikstjori_id');
            $table->foreign('leikstjori_id')->references('id')->on('leikstjori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
