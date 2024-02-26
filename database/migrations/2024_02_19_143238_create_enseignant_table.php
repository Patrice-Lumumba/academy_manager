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
        Schema::create('enseignant', function (Blueprint $table) {
            $table->string('code_ens', 10)->primary();
            $table->string('code_depart', 10)->nullable()->index('enseignant_code_depart_foreign');
            $table->string('code_mat', 10)->index('enseignant_code_mat_foreign');
            $table->string('code_depart_contenir', 10)->index('enseignant_code_depart_contenir_foreign');
            $table->string('nom', 30);
            $table->string('prenom', 30)->nullable();
            $table->string('tel_ens', 20);
            $table->string('mail_ens', 126)->nullable();
            $table->date('date_prise_ens');
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
        Schema::dropIfExists('enseignant');
    }
};
