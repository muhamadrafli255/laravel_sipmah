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
            $table->string('code')->unique();
            $table->foreignId('book_id');
            $table->foreignId('borrower_id');
            $table->foreignId('borrow_officer_id');
            $table->foreignId('returner_id')->nullable();
            $table->foreignId('return_officer_id')->nullable();
            $table->tinyInteger('status_borrow')->default(1);
            $table->date('borrow_date');
            $table->date('estimated_return');
            $table->date('return_date')->nullable();
            $table->tinyInteger('return_condition')->nullable();
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
