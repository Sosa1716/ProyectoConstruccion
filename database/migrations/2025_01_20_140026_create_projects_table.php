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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->enum('estado', ['pendiente', 'en_progreso', 'completado'])->default('pendiente');
            $table->string('imagen', 100)->nullable()->default('imagen');
            $table->foreignId('materiales_id');
            $table->foreignId('empleados_id');
            $table->foreignId('trabajadores_id');
            $table->timestamps();

            
            $table->foreign('materiales_id')->references('id')->on('materials')
            ->onDelete('cascade')->onUpdate('cascade');
            
            
            $table->foreign('empleados_id')->references('id')->on('employees')
            ->onDelete('cascade')->onUpdate('cascade');

            
            $table->foreign('trabajadores_id')->references('id')->on('workes')
            ->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
