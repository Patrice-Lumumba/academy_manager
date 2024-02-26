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
        Schema::create('evaluation', function (Blueprint $table) {
            $table->string("code_etud",30);
            $table->string("code_mat", 10);
            $table->float("note",4);
            $table->primary(["code_etud", "code_mat"]);
            $table->foreign("code_etud")->references("code_etud")->on("etudiant");
            $table->foreign("code_mat")->references("code_mat")->on("matiere");
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
        Schema::dropIfExists('evaluation');
    }
};
