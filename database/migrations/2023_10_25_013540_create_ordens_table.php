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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            //$table->integer('carrito_id')->notNullable();
            $table->foreignId('carrito_id')->constrained('carritos');
            //$table->integer('metodo_pago_id')->notNullable();
            $table->foreignId('metodo_pago_id')->constrained('metodo_pagos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
