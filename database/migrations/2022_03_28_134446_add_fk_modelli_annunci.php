<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkModelliAnnunci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annunci', function (Blueprint $table) {
            $table->foreign('modello_id')->references('id')->on('modelli')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annunci', function (Blueprint $table) {
            $table->dropForeign('annunci_modello_id_foreign');
        });
    }
}
