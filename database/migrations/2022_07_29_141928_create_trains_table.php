<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Azienda",50);
            $table->string("StazioneDiPartenza",30);
            $table->string("StazioneDiArrivo",30);
            $table->time("OrarioDiPartenza");
            $table->time("OrarioDiArrivo");
            $table->smallInteger("CodiceTreno");
            $table->smallInteger("NumeroCarrozze");
            $table->boolean("InOrario");
            $table->boolean("Cancellato");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
