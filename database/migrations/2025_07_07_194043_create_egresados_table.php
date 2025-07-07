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
        Schema::create('egresados', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('id_egresado',11)->nullable()->index();
            $table->string('Nombre', 55);
            $table->date('Fecha_Nacimiento');
            $table->string('tfno' , 50);
            $table->string('Direccion',150);
            $table->string('Correo', 60);
            $table->string('Nombre_LK', 50)->nullable();
            $table->string('Nombre_FB', 50)->nullable();
            $table->string('Link_FB', 80);
            $table->string('twitter', 50);
            $table->year('fecha_Pregrado')->nullable();
            $table->longText('Modo_Grado')->nullable();
            $table->integer('id_ciudad'. 11)->unique();

             $table->foreign('id_egresado')->references('id')->on('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
