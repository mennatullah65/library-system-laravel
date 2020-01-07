<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('bookId');
            $table->bigInteger('ISBN');
            $table->string('Name');
            $table->string('librarianEmail');
            $table->string('author');
            $table->string('publisher');
            $table->string('category');
            $table->string('edition');
            $table->text('description');
            $table->string('language');
            $table->bigInteger('numberOfPages');
            $table->bigInteger('numberOfCopies');
            $table->bigInteger('numberOfBorrowedTimes');
            $table->bigInteger('numberOfOrders');
            $table->decimal('price',8,3);
            $table->date('publishDate');
            $table->string('pathphoto')->nullable();
            $table->decimal('Rate',2,1);
            //$table->string('status')->nullable();
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
        Schema::dropIfExists('books');
    }
    
}
