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
        Schema::create('etudiant', function (Blueprint $table) {
            $table->string('code etudiant', 30)->primary();
            $table->string('nom_etud', 120);
            $table->string('prenom_etud', 120);
            $table->string('tel_etud', 30);
            $table->string('mail_etud', 30);
            $table->smallInteger('anne_etud')->default(2024);
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
        Schema::dropIfExists('etudiant');
    }
};
