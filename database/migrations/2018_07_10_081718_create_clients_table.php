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
            $table->string('pib');
            $table->integer('jmbg');
            $table->string('tekuci_racun');
            $table->string('telefon');
            $table->string('email')->unique();
            $table->string('osoba_za_kontakt');
            $table->text('napomena');
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
