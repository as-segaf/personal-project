<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_episodes', function (Blueprint $table) {
            $table->id();
            $table->foreign('channel_id')->references('id')->on('channels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('episode_id')->references('id')->on('episodes')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('channel_episodes');
    }
}
