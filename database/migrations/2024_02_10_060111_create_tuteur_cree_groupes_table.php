<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tuteur_cree_groupes', function (Blueprint $table) {
            $table->id('id_tuteur_cree_groupe');
            $table->string('nom_du_groupe');
            $table->string('specialite');
            $table->string('nombre_d_etudiants');
            $table->string('nom_du_tuteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteur_cree_groupes');
    }
};
