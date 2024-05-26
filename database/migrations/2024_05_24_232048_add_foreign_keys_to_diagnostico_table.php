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
        Schema::table('diagnostico', function (Blueprint $table) {
            $table->foreign(['id_cita'], 'diagnostico_ibfk_1')->references(['id'])->on('cita')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diagnostico', function (Blueprint $table) {
            $table->dropForeign('diagnostico_ibfk_1');
        });
    }
};
