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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del material
            $table->text('descripcion')->nullable(); // Descripción
            $table->string('unidad'); // Unidad de medida (ejemplo: kg, m, pieza)
            $table->decimal('precio_unitario', 10, 2); // Precio por unidad
            $table->integer('cantidad_disponible')->default(0); // Cantidad en inventario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
