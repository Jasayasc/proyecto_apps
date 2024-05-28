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
        Schema::create('consultorio_empleado', function (Blueprint $table) {
            $table->unsignedInteger('id_consultorio');
            $table->integer('id_inventario')->index('id_inventario');
            $table->timestamps();

            $table->primary(['id_consultorio', 'id_inventario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultorio_empleado');
    }
};
