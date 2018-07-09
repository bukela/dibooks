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
            $table->foreign('workbook_id')->references('id')->on('workbooks');
            $table->string('sender')->nullable();
            $table->integer('workbook_number')->nullable();
            $table->date('workbook_date')->nullable();
            $table->date('arrived_at')->nullable();
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
