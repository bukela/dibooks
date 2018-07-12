<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade')->onUpdate('cascade');
            $table->text('opis')->nullable();
            $table->enum('jedinica_mere', ['usluga', 'komad'])->default('usluga');
            $table->integer('kolicina')->nullable();
            $table->decimal('iznos',10,2)->nullable();
            $table->decimal('vrednost',10,2)->nullable();
            $table->decimal('osnovica',10,2)->nullable();
            $table->decimal('iznos_pdv',4,2)->nullable();
            $table->decimal('vrednost_sa_pdv',10,2)->nullable();
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
        Schema::dropIfExists('invoice_items');
    }
}
