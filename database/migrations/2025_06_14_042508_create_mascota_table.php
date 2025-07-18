<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('mascotas', function (Blueprint $table) {
        $table->id(); 
        $table->string('nombre');
        $table->string('tipo'); 
        $table->integer('edad'); 
        $table->string('raza');
        $table->decimal('peso', 5, 2); 
        $table->date('fecha_adopcion');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('mascota');
    }
};
