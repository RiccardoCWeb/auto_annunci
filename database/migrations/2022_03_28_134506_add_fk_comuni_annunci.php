<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkComuniAnnunci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annunci', function (Blueprint $table) {
            $table->foreign('comune_id')->references('id')->on('comuni')->cascadeOnDelete()->cascadeOnUpdate();
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
            $table->dropForeign('annunci_comune_id_foreign');
        });
    }
}
