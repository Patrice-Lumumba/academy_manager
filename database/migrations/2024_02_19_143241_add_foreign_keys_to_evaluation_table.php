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
        Schema::table('evaluation', function (Blueprint $table) {
            $table->foreign(['code_etud'])->references(['code_etud'])->on('etudiant');
            $table->foreign(['code_mat'])->references(['code_mat'])->on('matiere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluation', function (Blueprint $table) {
            $table->dropForeign('evaluation_code_etud_foreign');
            $table->dropForeign('evaluation_code_mat_foreign');
        });
    }
};
