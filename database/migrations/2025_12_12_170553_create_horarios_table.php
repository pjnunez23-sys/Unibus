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
       Schema::create('horarios', function (Blueprint $table) {
        $table->id();
        $table->foreignId('camion_id')->constrained('camiones')->onDelete('cascade');
        $table->time('hora_salida');
        $table->time('hora_llegada');
        $table->string('dias'); // L, M, X, J, V, S
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
