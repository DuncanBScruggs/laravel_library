<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_genres', function (Blueprint $table) {
            $table->bigIncrements('book_genre_id');
            $table->unsignedBigInteger('ref_genre_id');
            $table->unsignedBigInteger('ref_book_id');
            $table->timestamps();

            $table->foreign('ref_genre_id')
                ->references('genre_id')
                ->on('genres')
                ->onDelete('cascade');
            $table->foreign('ref_book_id')
                ->references('book_id')
                ->on('books')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_genres');
    }
}
