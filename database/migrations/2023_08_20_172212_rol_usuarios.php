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
        Schema::create('rol_usuarios', function (Blueprint $table) {

            $table->id();
            $table->integer('id_usuario');
            $table->integer('id_rol');
            $table->boolean('estaactivo')->nullable($value=false);
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_rol')->references('id')->on('roles');
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
