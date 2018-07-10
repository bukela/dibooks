<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->date('bill_date');
            $table->string('bill_number');
            $table->date('bill_issue_date');
            $table->string('name');
            $table->string('location');
            $table->string('pib_or_jmbg');
            $table->decimal('bill_amount_vat',10,2);
            $table->decimal('bill_amount',10,2);
            $table->decimal('vat',4,2);
           
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
        Schema::dropIfExists('outgoing_invoices');
    }
}
