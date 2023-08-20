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
        Schema::Create('sedes',function(Blueprint $table){
            $table->id();
            $table->string('nombre',100);
            $table->integer('idciudad');
            $table->foreign('idciudad')->references('id')->on('ciudades');
            $table->boolean('estaactivo')->default(true); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
