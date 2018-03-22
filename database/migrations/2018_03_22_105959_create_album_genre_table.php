<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_genre', function (Blueprint $table) {

            $table->integer('album_id')->unsigned()->nullable();
            $table->foreign('album_id')->references('id')
                  ->on('albums')->onDelete('cascade');
      
            $table->integer('genre_id')->unsigned()->nullable();
            $table->foreign('genre_id')->references('id')
                  ->on('genres')->onDelete('cascade');
                  
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
        Schema::dropIfExists('album_genre');
    }
}
