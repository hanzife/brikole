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
            $table->string('nom',254);
            $table->string('prenom',254);
            $table->string('telephone',254);
            $table->string('email',254);
            $table->boolean('verif_compte');
            $table->string('mot_passe',254);
            $table->string('status',254);
            $table->integer('points');
            $table->text('description');
            $table->string('lieu',254);
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

