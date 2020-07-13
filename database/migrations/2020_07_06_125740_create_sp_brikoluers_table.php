<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpBrikoluersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sp_brikoluers', function (Blueprint $table) {
            $table->foreignId('id_brikoleur')->references('id_brikoleur')->on('brikoleurs');
            $table->foreignId('id_SPB')->references('id_sous_profession')->on('sous_professions');
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
        Schema::dropIfExists('sp_brikoluers');
    }
}
