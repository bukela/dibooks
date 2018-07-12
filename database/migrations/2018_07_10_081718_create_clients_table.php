<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('adresa');
            $table->string('mesto');
            $table->string('pib')->nullable();
            $table->string('jmbg')->nullable();
            $table->string('tekuci_racun')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->string('osoba_za_kontakt')->nullable();
            $table->text('napomena')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
