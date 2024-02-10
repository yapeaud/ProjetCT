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
        Schema::create('internship_note_tuteurs', function (Blueprint $table) {
            $table->id('id_internship_note_tuteur');
            $table->string('nom_du_tuteur');
            $table->string('note_du_tuteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_note_tuteurs');
    }
};
