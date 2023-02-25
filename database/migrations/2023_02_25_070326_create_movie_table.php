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
        Schema::create('movie', function (Blueprint $table) {
            $table->bigIncrements('movie_id');
            $table->string('name');
            $table->string('title');
            $table->string('descreption');
            $table->string('trailer_path');
            $table->string('image_path')->nullable();
            $table->timestamp('release_date')->nullable();
            $table->double('rating')->default(0);
            $table->bigInteger('nbr_views')->default(0);
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
        Schema::dropIfExists('movie');
    }
};
