<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('borrower_id');
            $table->foreignId('borrow_officer_id');
            $table->foreignId('retun_officer_id');
            $table->foreignId('book_id');
            $table->tinyInteger('status_borrow');
            $table->timestamp('borrowed_date');
            $table->timestamp('estimation_returned')->nullable();
            $table->timestamp('returned_date')->nullable();
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
        Schema::dropIfExists('borrows');
    }
}
