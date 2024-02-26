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
        Schema::table('evaluations', function (Blueprint $table) {
            $table->foreign(['code_mat'])->references(['code_mat'])->on('matieres');
            $table->foreign(['code etudiant'])->references(['code etudiant'])->on('etudiant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            $table->dropForeign('evaluations_code_mat_foreign');
            $table->dropForeign('evaluations_code etudiant_foreign');
        });
    }
};
