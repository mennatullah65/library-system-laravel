<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarians', function (Blueprint $table) {
            $table->bigIncrements('librarianId');
            $table->string('librarianName');
            $table->char('librarianPhone');
            $table->text('librarianAddress');
            $table->string('librarianEmail');
            $table->string('librarianPassword');
            $table->string('librarianGender');
            $table->string('librarianPhoto')->nullable();
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
        Schema::dropIfExists('librarians');
    }
}
