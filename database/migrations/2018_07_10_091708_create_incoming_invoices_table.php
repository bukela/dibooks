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
            $table->integer('client_id');
            $table->string('redni_broj');
            $table->date('datum_prijema')->nullable();
            $table->date('datum_fakture')->nullable();
            $table->string('broj_fakture')->nullable();
            $table->decimal('iznos_fakture',10,2)->nullable();
            $table->enum('nacin_placanja', ['Gotovina', 'Virman', 'Kartica'])->default('Gotovina');
            $table->date('datum_placanja')->nullable();
            $table->decimal('iznos',10,2)->nullable();
            $table->string('broj_izvoda')->nullable();
            $table->enum('valuta', ['RSD', 'EUR', 'USD'])->default('RSD');
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
