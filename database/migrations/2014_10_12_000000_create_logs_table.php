<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('duel_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->string('note')->nullable();
            $table->bigInteger('lifepoints');
            $table->boolean('active')->default(1);
            $table->string('lifeadd');
            $table->timestamps();

            $table->foreign('duel_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logs');
    }
}
