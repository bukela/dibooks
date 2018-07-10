<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomingInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_receipt');
            $table->string('supplier_name');
            $table->string('supplier_location');
            $table->date('invoice_date');
            $table->string('invoice_number');
            $table->decimal('invoice_amount',10,2);
            $table->enum('payment_method', ['Gotovina', 'Virman', 'Kartica'])->default('Gotovina');
            $table->enum('currency', ['RSD', 'EUR', 'USD'])->default('RSD');
            $table->decimal('invoice_paid_amount',10,2);
            $table->decimal('invoice_debt_amount',10,2);
            $table->date('invoice_paid_date');
            $table->string('transfer_number');
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
        Schema::dropIfExists('incoming_invoices');
    }
}
