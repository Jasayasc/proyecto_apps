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
        Schema::table('cita', function (Blueprint $table) {
            $table->foreign(['id_paciente'], 'cita_ibfk_1')->references(['id'])->on('paciente')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_medico'], 'cita_ibfk_2')->references(['id'])->on('empleado')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cita', function (Blueprint $table) {
            $table->dropForeign('cita_ibfk_1');
            $table->dropForeign('cita_ibfk_2');
        });
    }
};
