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
        Schema::create('internship_gere_tuteurs', function (Blueprint $table) {
            $table->id('id_internship_gere_tuteur');
            $table->string('nom');
            $table->string('contact');
            $table->string('email');
            $table->string('specialite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_gere_tuteurs');
    }
};
