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
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->date('fecha_nacimiento');
            $table->string('ciudad', 45);
            $table->string('telefono', 10);
            $table->string('direccion', 45);
            $table->unsignedInteger('id_usuario')->index('id_usuario');
            $table->integer('estado')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
