<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watchlists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('film_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::table('watchlists', function (Blueprint $table) {
            $table->dropForeign(['film_id']);
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('watchlists');
    }
};
