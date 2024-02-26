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
        Schema::table('enseignants', function (Blueprint $table) {
            $table->foreign(['code_mat'])->references(['code_mat'])->on('matieres');
            $table->foreign(['code_depart'])->references(['code_depart'])->on('departement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enseignants', function (Blueprint $table) {
            $table->dropForeign('enseignants_code_mat_foreign');
            $table->dropForeign('enseignants_code_depart_foreign');
        });
    }
};
