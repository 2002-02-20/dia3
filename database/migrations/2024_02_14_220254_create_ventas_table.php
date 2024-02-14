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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clientes');
            $table->foreign('id_clientes')->references('id')->on('clientes');

            $table->unsignedBigInteger('id_condicions');
            $table->foreign('id_condicions')->references('id')->on('condicions');

            $table->unsignedBigInteger('id_forma_pago');
            $table->foreign('id_forma_pago')->references('id')->on('forma_pagos');

            $table->unsignedBigInteger('id_inmueble');
            $table->foreign('id_inmueble')->references('id')->on('inmuebles');

            $table->char('desc_venta');
            $table->char('total_venta');
            $table->char('total_iva');
            $table->char('total_general');
            $table->char('fecha_venta|fecha');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
