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
        Schema::create('cita', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('fecha');
            $table->integer('hora')->index('hora');
            $table->boolean('asistencia')->nullable();
            $table->unsignedInteger('id_paciente')->index('id_paciente');
            $table->unsignedInteger('id_medico')->index('id_medico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita');
    }
};
