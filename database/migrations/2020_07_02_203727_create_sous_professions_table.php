<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_professions', function (Blueprint $table) {
            $table->bigIncrements('id_sous_profession');
            $table->foreignId('id_profession')->references('id_profession')->on('professions');
            $table->string('libelle_SP',254);

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
        Schema::dropIfExists('sous_professions');
    }
}
