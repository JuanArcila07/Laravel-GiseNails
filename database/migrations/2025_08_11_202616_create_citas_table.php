<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('citas', function (Blueprint $table) {
        $table->id();
        $table->string('cliente');
        $table->string('gestora');
        $table->string('servicio');
        $table->date('fecha');
        $table->time('hora');
        $table->enum('estado', ['Pendiente', 'Confirmada', 'Cancelada'])->default('Pendiente');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
