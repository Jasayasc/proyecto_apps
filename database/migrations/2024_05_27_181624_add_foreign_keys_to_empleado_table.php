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
        Schema::table('empleado', function (Blueprint $table) {
            $table->foreign(['oficina'], 'empleado_a_oficina')->references(['id'])->on('oficina')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['especialidad'], 'especialidad')->references(['id'])->on('especialidad')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_usuario'], 'id_usuario')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleado', function (Blueprint $table) {
            $table->dropForeign('empleado_a_oficina');
            $table->dropForeign('especialidad');
            $table->dropForeign('id_usuario');
        });
    }
};
