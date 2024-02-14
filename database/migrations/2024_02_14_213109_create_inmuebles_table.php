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
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_inmuebles');
            $table->foreign('id_tipo_inmuebles')->references('id')->on('tipo_inmuebles')->onDelete('cascade')->onUpdate('cascade'); 

            $table->char('desc_inmueble');
            $table->char('ubic_inmueble');
            $table->char('costo_inmueble');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
