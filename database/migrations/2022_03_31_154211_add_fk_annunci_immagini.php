<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkAnnunciImmagini extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immagini', function (Blueprint $table) {
            $table->foreign('annuncio_id')->references('id')->on('annunci')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immagini', function (Blueprint $table) {
            $table->dropForeign('immagini_annuncio_id_foreign');
        });
    }
}
