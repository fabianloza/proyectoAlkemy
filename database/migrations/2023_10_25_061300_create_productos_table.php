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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->double('precio');
            $table->string('imagen', 255)->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->boolean('habilitado')->default(true);
            
          //  $table->foreign('categoria_id')->references('id')->on('categorias');      clave foranea relaciones entre tablas 
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
