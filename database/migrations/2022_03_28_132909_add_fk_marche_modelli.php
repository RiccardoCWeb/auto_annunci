<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkMarcheModelli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modelli', function (Blueprint $table) {
            $table->foreign('marca_id')->references('id')->on('marche')->cascadeOnDelete()->cascadeOnUpdate();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modelli', function (Blueprint $table) {
            $table->dropForeign('modelli_marca_id_foreign');
        });
    }
}
