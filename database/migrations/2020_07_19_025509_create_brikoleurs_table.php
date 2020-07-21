<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrikoleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brikoleurs', function (Blueprint $table) {
            $table->bigIncrements('id_brikoleur');
            $table->foreignId('id_profession')->references('id_profession')->on('professions');
            $table->foreignId('id_dossier')->references('id_dossier')->on('dossiers');
            $table->foreignId('id_commentaire')->references('id_commentaire')->on('commentaires');
            $table->string('nom',255);
            $table->string('prenom',255);
            $table->string('telephone',255);
            $table->string('email',255);
            $table->boolean('verif_compte');
            $table->string('mot_passe',255);
            $table->string('status',255);
            $table->integer('points');
            $table->text('description');
            $table->string('adresse',255);
            $table->string('ville',255);
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
        Schema::dropIfExists('brikoleurs');
    }
}
