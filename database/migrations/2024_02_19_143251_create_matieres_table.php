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
        Schema::create('matieres', function (Blueprint $table) {
            $table->string('code_mat', 10)->primary();
            $table->string('label_mat', 120);
            $table->smallInteger('credit_mat')->default(2);
            $table->smallInteger('vh_mat')->default(30);
            $table->string('num_salle', 10)->index('matieres_num_salle_foreign');
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
        Schema::dropIfExists('matieres');
    }
};
