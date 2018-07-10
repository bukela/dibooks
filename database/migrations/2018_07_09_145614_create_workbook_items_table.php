<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkbookItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workbook_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workbook_id')->unsigned();
            $table->foreign('workbook_id')->references('id')->on('workbooks')->onDelete('cascade')->onUpdate('cascade');
            $table->string('broj');
            $table->string('posiljalac')->nullable();
            $table->integer('podbroj')->nullable();
            $table->date('datum_prijema')->nullable();
            $table->date('datum')->nullable();
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
        Schema::dropIfExists('workbook_items');
    }
}
