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
        Schema::table('consultorio_empleado', function (Blueprint $table) {
            $table->foreign(['id_consultorio'], 'consultorio_empleado_ibfk_1')->references(['id'])->on('oficina')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_inventario'], 'consultorio_empleado_ibfk_2')->references(['id'])->on('inventario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultorio_empleado', function (Blueprint $table) {
            $table->dropForeign('consultorio_empleado_ibfk_1');
            $table->dropForeign('consultorio_empleado_ibfk_2');
        });
    }
};
