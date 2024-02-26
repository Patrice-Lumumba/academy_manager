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
            $table->string('code_ens', 30);
            $table->string('code_depart', 30)->index('enseignant_code_depart_foreign');
            $table->string('code_mat', 10);
            $table->string('nom_ens', 120);
            $table->string('prenom_ens', 120);
            $table->string('tel_ens', 30);
            $table->string('mail_ens', 30);
            $table->smallInteger('date_prise_ens');
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
