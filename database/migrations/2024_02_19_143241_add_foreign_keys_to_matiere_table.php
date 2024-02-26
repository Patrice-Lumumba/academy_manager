<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matiere', function (Blueprint $table) {
            $table->foreign(['num_salle'])->references(['num_salle'])->on('salle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matiere', function (Blueprint $table) {
            $table->dropForeign('matiere_num_salle_foreign');
        });
    }
};
