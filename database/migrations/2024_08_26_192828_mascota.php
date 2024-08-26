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
        Schema::create('mascotas', function(Blueprint $table){
            $table->id();
            $table->string('nombre', 100);
            $table->date('fecha_nac');
            $table->string('especie', 100);
            $table->string('raza', 100);
            $table->string('genero', 100);
            $table->string('propietario', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
