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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ra');
            $table->string('codigo')-> unique();
            $table->string('email');
            $table->string('telefone');
            $table->string('nome');
            $table->unsignedBigInteger('turmas_id');
            $table-> foreign('turmas_id') -> references ('id') -> on ('turmas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
