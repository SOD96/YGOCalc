<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('duel_id')->unsigned();
            $table->string('deck');
            $table->string('note');
            $table->bigInteger('lifepoints');
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('duel_id')->references('id')->on('games')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
