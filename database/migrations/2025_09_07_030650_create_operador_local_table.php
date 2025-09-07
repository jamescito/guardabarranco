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
        Schema::create('operador_local', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 100)->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->Integer('telefono');
            $table->string("direccion", 200);
            $table->Integer('edad');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operador_local');
    }
};
