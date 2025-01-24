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
        Schema::create('workes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('posicion'); // Ejemplo: "Ingeniero", "Obrero"
            $table->string('contacto');
            $table->string('activo'); 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workes');
    }
};
