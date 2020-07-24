<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasakumiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasakumi', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->date('DatumsNO');
            $table->date('DatumsLIDZ');
            $table->time('LaiksNO');
            $table->time('LaiksLIDZ');
            $table->string('Norises_vieta');
            $table->integer('Personu_skaits')->unsigned();
            $table->string('Atbildigais');
            $table->string('Kontaktinfo');
            $table->string('piezimes');
            $table->boolean('projektors');
            $table->boolean('dators');
            $table->boolean('mikrafons');
            $table->boolean('skana');
            $table->boolean('TV');
            $table->boolean('tehnika');
            $table->boolean('prezenteris');
            $table->boolean('ITspec');
            $table->string('pauzes');
            $table->integer('stavvietas')->unsigned();
            $table->integer('apsardze')->unsigned();
            $table->boolean('uzkopsana');
            $table->boolean('PR');
            $table->boolean('apstiprinatsDir')->default('0');
            $table->boolean('apstiprinatsDNV')->default('0');
            $table->boolean('apstiprinatsAudz')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasakumi');
    }
}
