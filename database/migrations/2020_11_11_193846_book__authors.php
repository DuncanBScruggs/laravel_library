<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_authors', function (Blueprint $table) {
            $table->bigIncrements('book_author_id');
            $table->unsignedBigInteger('ref_author_id');
            $table->unsignedBigInteger('ref_book_id');
            $table->timestamps();

            $table->foreign('ref_author_id')
                ->references('author_id')
                ->on('authors')
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
        Schema::dropIfExists('book_authors');
    }
}
