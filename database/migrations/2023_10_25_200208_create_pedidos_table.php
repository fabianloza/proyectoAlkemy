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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('producto_id')->constrained();
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('carrito_id')->constrained('carritos');
            $table->integer('cantidad')->notNullable()->positive();
            $table->double('importe')->notNullable()->positive();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
