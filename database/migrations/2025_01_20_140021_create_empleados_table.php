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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del empleado
            $table->string('apellido'); // Apellido del empleado
            $table->string('email')->unique(); // Email único
            $table->string('telefono')->nullable(); // Teléfono
            $table->string('puesto'); // Puesto o cargo del empleado
            $table->decimal('salario', 10, 2)->default(0.00); // Salario
            $table->date('fecha_contratacion'); // Fecha de contratación
            $table->timestamps();


            $table->foreign('proyectos_id')->references('id')->on('proyectos')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
