<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('borrow_id');
            $table->foreignId('book_id');
            $table->date('estimated_return');
            $table->boolean('is_return');
            $table->foreignId('returner_id')->nullable();
            $table->foreignId('return_officer_id')->nullable();
            $table->date('return_date')->nullable();
            $table->tinyInteger('return_condition')->nullable();
            $table->tinyInteger('status_borrow')->default(1);
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
        Schema::dropIfExists('borrow_books');
    }
}
