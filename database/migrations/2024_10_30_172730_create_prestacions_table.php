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
        Schema::create('prestacions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->unsignedBiginteger('personals_id')->nullable();
            $table->foreign('personals_id')->references('id')->on('personals')->nullable()->constrained()->onUpdate('cascade');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestacions');
    }
};
