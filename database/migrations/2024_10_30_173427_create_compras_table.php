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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad');
            $table->string('fecha_compra');
            $table->integer('total');
            $table->unsignedBiginteger('financiamiento_id')->nullable();
            $table->foreign('financiamiento_id')->references('id')->on('financiamientos')->nullable()->constrained()->onUpdate('cascade');
            $table->unsignedBiginteger('prestacion_id')->nullable();
            $table->foreign('prestacion_id')->references('id')->on('prestacions')->nullable()->constrained()->onUpdate('cascade');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
